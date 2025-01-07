<?php


namespace Okay\Entities;


use Okay\Core\Entity\Entity;
use Okay\Core\Modules\Extender\ExtenderFacade;
use Okay\Core\Translit;
use Okay\Core\Image;

class ManufacturersEntity extends Entity
{

    protected static $fields = [
        'id',
        'url',
        'image',
        'last_modify',
        'visible',
        'position',
    ];

    protected static $langFields = [
        'name',
        'name_h1',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'annotation',
        'description'
    ];

    protected static $searchFields = [
        'name',
        'meta_keywords',
    ];

    protected static $defaultOrderFields = [
//        'position',
        'name',
    ];

    protected static $table = '__manufacturers';
    protected static $langObject = 'manufacturer';
    protected static $langTable = 'manufacturers';
    protected static $tableAlias = 'm';
    protected static $alternativeIdField = 'url';

    public function find(array $filter = [])
    {
        $this->select->distinct(true);
        $this->select->join('left', '__products AS p', 'p.manufacturer_id = m.id');
        return parent::find($filter);
    }

    public function count(array $filter = [])
    {
        $this->select->join('left', '__products AS p', 'p.manufacturer_id=m.id');
        return parent::count($filter);
    }

    protected function filter__product_visible($productVisible)
    {
        $this->select->where('p.visible = ' . (int)$productVisible);
    }

    protected function filter__product_id($productsIds)
    {
        $this->select->where('p.id IN (:products_ids)');
        $this->select->bindValue('products_ids', (array)$productsIds);
    }

    protected function filter__category_id($categoryId)
    {
        $this->select->join('LEFT', '__products_categories pc', 'p.id = pc.product_id');
        $this->select->where('pc.category_id IN (:categories_ids)')
            ->bindValue('categories_ids', (array)$categoryId);
    }

    protected function filter__selected_manufacturers($manufacturersIds)
    {
        $this->select->orWhere('m.id IN (:selected_manufacturers)')
            ->bindValue('selected_manufacturers', (array)$manufacturersIds);
    }

    protected function filter__other_filter($filters)
    {
        if (empty($filters)) {
            return;
        }

        if ($otherFilter = $this->executeOtherFilter($filters)) {
            $this->select->where("(" . implode(' OR ', $otherFilter) . ")");
        }
    }

    private function executeOtherFilter($filters)
    {
        $otherFilter = [];
        if (in_array("featured", $filters)) {
            $otherFilter[] = 'p.featured=1';
        }

        if (in_array("discounted", $filters)) {
//            $otherFilter[] = '(SELECT 1 FROM __variants pv WHERE pv.product_id=p.id AND pv.compare_price>pv.price LIMIT 1) = 1'; // ориг
            $otherFilter[] = '(SELECT 1 FROM __variants pv WHERE pv.product_id=p.id AND p.id IN ('.$this->settings->get('pseudoDiscountProducts').') LIMIT 1) = 1';
        }

        return ExtenderFacade::execute([static::class, __FUNCTION__], $otherFilter, func_get_args());
    }

    protected function filter__price(array $price)
    {
        $productsEntity = $this->entity->get(ProductsEntity::class);

        $productsSelect = $productsEntity->getSelect(['price' => $price, 'visible' => 1]);

        $productsSelect
            ->resetCols()
            ->resetOrderBy()
            ->cols([ProductsEntity::getTableAlias().'.manufacturer_id']);

        $this->select->joinSubSelect(
            'INNER',
            $productsSelect,
            __FUNCTION__.'__'.ProductsEntity::getTableAlias(),
            __FUNCTION__.'__'.ProductsEntity::getTableAlias().'.manufacturer_id = m.id');
    }

    protected function filter__features($features, $filter)
    {
        $subQuery = $this->queryFactory->newSelect();
        // Алиас для таблицы без языков
        $optionsPx = 'fv';

        if (!empty($this->lang->getLangId())) {
            $subQuery->where('lfv.lang_id=' . (int)$this->lang->getLangId())
                ->join('LEFT', '__lang_features_values AS lfv', 'pf.value_id=lfv.feature_value_id');
            // Алиас для таблицы с языками
            $optionsPx = 'lfv';
        }

        foreach ($features as $featureId=>$value) {
            $featuresValues[] = "({$optionsPx}.translit IN (:translit_features_{$featureId}) AND fv.feature_id=:feature_id_features_{$featureId})";
            $subQuery->bindValues([
                "translit_features_{$featureId}" => (array)$value,
                "feature_id_features_{$featureId}" => $featureId,
            ]);
        }

        if (empty($featuresValues)) {
            return;
        }

        if (!empty($filter['product_visible'])) {
            $subQuery->join('LEFT', '__products AS p', 'p.id=pf.product_id')
                ->where('p.visible = ' . (int)$filter['product_visible']);
        }

        $subQuery->from('__products_features_values AS pf')
            ->cols(['pf.product_id'])
            ->where('(' . implode(' OR ', $featuresValues) . ')')
            ->join('LEFT', '__features_values AS fv', 'fv.id=pf.value_id')
            ->groupBy(['pf.product_id'])
            ->having('COUNT(*) >=' . count($features));

        $this->select->where('p.id IN (?)', $subQuery);
    }

    public function add($manufacturer)
    {
        /** @var Translit $translit */
        $translit = $this->serviceLocator->getService(Translit::class);

        $manufacturer = (object)$manufacturer;
        if (empty($manufacturer->url)) {
            $manufacturer->url = $translit->translit($manufacturer->name);
            $manufacturer->url = str_replace('.', '', $manufacturer->url);
        }

        $manufacturer->url = preg_replace("/[\s]+/ui", '', $manufacturer->url);

        while ($this->get((string)$manufacturer->url)) {
            if(preg_match('/(.+)([0-9]+)$/', $manufacturer->url, $parts)) {
                $manufacturer->url = $parts[1].''.($parts[2]+1);
            } else {
                $manufacturer->url = $manufacturer->url.'2';
            }
        }

        return parent::add($manufacturer);
    }

    public function delete($ids)
    {
        $ids = (array)$ids;
        if (empty($ids)) {
            parent::delete($ids);
        }

        /** @var Image $imageCore */
        $imageCore = $this->serviceLocator->getService(Image::class);
        foreach ($ids as $id) {
            $imageCore->deleteImage(
                $id,
                'image',
                self::class,
                $this->config->original_manufacturers_dir,
                $this->config->resized_manufacturers_dir
            );
        }

        $update = $this->queryFactory->newUpdate();
        $update->table(ProductsEntity::getTable())
            ->set('manufacturer_id', 0)
            ->where('manufacturer_id IN (:manufacturers_ids)')
            ->bindValue('manufacturers_ids', $ids);
        $this->db->query($update);

        parent::delete($ids);
    }

    public function duplicate($manufacturerId)
    {
        $manufacturer = $this->findOne(['id' => $manufacturerId]);

        //Запоминаем текущую позицию, на нее станет новая запись
        $position = $manufacturer->position;

        $newManufacturer = new \stdClass();

        $fields = array_merge($this->getFields(), $this->getLangFields());

        foreach ($fields as $field) {
            if (property_exists($manufacturer, $field)) {
                $newManufacturer->$field = $manufacturer->$field;
            }
        }

        $newManufacturer->id = null;
        $newManufacturer->url = '';

        //Добавляем новую запись в бд
        $newManufacturerId = $this->add($newManufacturer);

        // Сдвигаем страницы вперед и вставляем копию на соседнюю позицию
        $update = $this->queryFactory->newUpdate();
        $update->table('__manufacturers')
            ->set('position', 'position+1')
            ->where('position>=:position')
            ->bindValue('position', $manufacturer->position);
        $this->db->query($update);

        $update = $this->queryFactory->newUpdate();
        $update->table('__manufacturers')
            ->set('position', ':position')
            ->where('id=:id')
            ->bindValues([
                'position' => $position,
                'id' => $newManufacturerId,
            ]);
        $this->db->query($update);

        $this->multiDuplicateManufacturer($manufacturerId, $newManufacturerId);
        return $newManufacturerId;
    }

    private function multiDuplicateManufacturer($manufacturerId, $newManufacturerId) {
        $langId = $this->lang->getLangId();
        if (!empty($langId)) {

            /** @var LanguagesEntity $langEntity */
            $langEntity = $this->entity->get(LanguagesEntity::class);

            $languages = $langEntity->find();
            $manufacturerLangFields = $this->getLangFields();

            foreach ($languages as $language) {
                if ($language->id != $langId) {
                    $this->lang->setLangId($language->id);

                    if (!empty($manufacturerLangFields)) {
                        $sourceManufacturer = $this->findOne(['id' => $manufacturerId]);
                        $destinationManufacturer = new \stdClass();
                        foreach($manufacturerLangFields as $field) {
                            $destinationManufacturer->{$field} = $sourceManufacturer->{$field};
                        }
                        $this->update($newManufacturerId, $destinationManufacturer);
                    }

                    $this->lang->setLangId($langId);
                }
            }
        }
    }

    public function filter__product_keyword($keyword)
    {
        /** @var ProductsEntity $productsEntity */
        $productsEntity = $this->entity->get(ProductsEntity::class);

        $productsSelect = $productsEntity->getSelect(['keyword' => $keyword, 'visible' => 1]);

        $productsSelect
            ->resetCols()
            ->resetOrderBy()
            ->cols([ProductsEntity::getTableAlias().'.manufacturer_id']);

        $this->select->joinSubSelect(
            'INNER',
            $productsSelect,
            __FUNCTION__.'__'.ProductsEntity::getTableAlias(),
            __FUNCTION__.'__'.ProductsEntity::getTableAlias().'.manufacturer_id = m.id');
    }
}
