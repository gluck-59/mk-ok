<?php


namespace Okay\Admin\Helpers;


use Okay\Core\Config;
use Okay\Core\Database;
use Okay\Core\EntityFactory;
use Okay\Core\Image;
use Okay\Core\QueryFactory;
use Okay\Core\Request;
use Okay\Entities\ManufacturersEntity;
use Okay\Core\Modules\Extender\ExtenderFacade;
use Okay\Entities\CategoriesEntity;

class BackendManufacturersHelper
{
    /**
     * @var ManufacturersEntity
     */
    private $manufacturersEntity;
    
    /**
     * @var CategoriesEntity
     */
    private $categoriesEntity;

    /**
     * @var Image
     */
    private $imageCore;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var QueryFactory
     */
    private $queryFactory;

    /**
     * @var Database
     */
    private $db;

    /**
     * @var Request
     */
    private $request;

    public function __construct(
        EntityFactory $entityFactory,
        Config        $config,
        Image         $imageCore,
        QueryFactory  $queryFactory,
        Database      $db,
        Request       $request
    ){
        $this->manufacturersEntity = $entityFactory->get(ManufacturersEntity::class);
        $this->categoriesEntity = $entityFactory->get(CategoriesEntity::class);
        $this->config       = $config;
        $this->imageCore    = $imageCore;
        $this->queryFactory = $queryFactory;
        $this->db           = $db;
        $this->request      = $request;
    }

    public function findManufacturers($filter)
    {
        $manufacturers = $this->manufacturersEntity->mappedBy('id')->find($filter);
        return ExtenderFacade::execute(__METHOD__, $manufacturers, func_get_args());
    }

    public function findAllManufacturers()
    {
        $manufacturersCount = $this->manufacturersEntity->count();
        $allManufacturers = $this->manufacturersEntity->mappedBy('id')->find(['limit' => $manufacturersCount]);
        return ExtenderFacade::execute(__METHOD__, $allManufacturers, func_get_args());
    }

    public function prepareFilterForProductsAdmin($categoryId)
    {
        $category = $this->categoriesEntity->get((int)$categoryId);
        $manufacturersFilter = [];
        if (!empty($category)) {
            $manufacturersFilter['category_id'] = $category->children;
        }

        $manufacturersCount = $this->manufacturersEntity->count($manufacturersFilter);
        $manufacturersFilter['limit'] = $manufacturersCount;

        return ExtenderFacade::execute(__METHOD__, $manufacturersFilter, func_get_args());
    }

    public function prepareAdd($manufacturer)
    {
        return ExtenderFacade::execute(__METHOD__, $manufacturer, func_get_args());
    }

    public function add($manufacturer)
    {
        $insertId = $this->manufacturersEntity->add($manufacturer);
        return ExtenderFacade::execute(__METHOD__, $insertId, func_get_args());
    }

    public function prepareUpdate($manufacturer)
    {
        return ExtenderFacade::execute(__METHOD__, $manufacturer, func_get_args());
    }

    public function update($id, $manufacturer)
    {
        $this->manufacturersEntity->update($id, $manufacturer);
        return ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function getManufacturer($id)
    {
        $manufacturer = $this->manufacturersEntity->get($id);
        return ExtenderFacade::execute(__METHOD__, $manufacturer, func_get_args());
    }

    public function deleteImage($manufacturer)
    {
        $this->imageCore->deleteImage(
            $manufacturer->id,
            'image',
            ManufacturersEntity::class,
            $this->config->original_manufacturers_dir,
            $this->config->resized_manufacturers_dir
        );

        return ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function uploadImage($image, $manufacturer)
    {
        if (!empty($image['name']) && ($filename = $this->imageCore->uploadImage($image['tmp_name'], $image['name'], $this->config->original_manufacturers_dir))) {
            $this->imageCore->deleteImage(
                $manufacturer->id,
                'image',
                ManufacturersEntity::class,
                $this->config->original_manufacturers_dir,
                $this->config->resized_manufacturers_dir
            );

            $this->manufacturersEntity->update($manufacturer->id, ['image'=>$filename]);
        }

        return ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function enable($ids)
    {
        $this->manufacturersEntity->update($ids, ['visible' => 1]);
        ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function disable($ids)
    {
        $this->manufacturersEntity->update($ids, ['visible' => 0]);
        ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function delete($ids)
    {
        ExtenderFacade::execute(__METHOD__, null, func_get_args());
        $this->manufacturersEntity->delete($ids);
    }

    public function moveToPage($ids, $targetPage, $filter)
    {
        // Сразу потом откроем эту страницу
        $filter['page'] = $targetPage;

        // До какого бренда перемещать
        $limit = $filter['limit']*($targetPage-1);
        if ($targetPage > $this->request->get('page', 'integer')) {
            $limit += count($ids)-1;
        } else {
            $ids = array_reverse($ids, true);
        }

        $tempFilter = $filter;
        $tempFilter['page'] = $limit+1;
        $tempFilter['limit'] = 1;
        $tmp = $this->manufacturersEntity->find($tempFilter);
        $targetManufacturer = array_pop($tmp);
        $targetPosition = $targetManufacturer->position;

        // Если вылезли за последний бренд - берем позицию последнего бренда в качестве цели перемещения
        if ($targetPage > $this->request->get('page', 'integer') && !$targetPosition) {

            $select = $this->queryFactory->newSelect();
            $select->from('__manufacturers')
                ->cols(['distinct position AS target'])
                ->orderBy(['position DESC'])
                ->limit(1);

            $this->db->query($select);
            $targetPosition = $this->db->result('target');
        }

        foreach ($ids as $id) {
            $initialPosition = $this->manufacturersEntity->cols(['position'])->get((int)$id)->position;

            $update = $this->queryFactory->newUpdate();
            if ($targetPosition > $initialPosition) {
                $update->table('__manufacturers')
                    ->set('position', 'position-1')
                    ->where('position > :initial_position')
                    ->where('position <= :target_position')
                    ->bindValues([
                        'initial_position' => $initialPosition,
                        'target_position' => $targetPosition,
                    ]);
            } else {
                $update->table('__manufacturers')
                    ->set('position', 'position+1')
                    ->where('position < :initial_position')
                    ->where('position >= :target_position')
                    ->bindValues([
                        'initial_position' => $initialPosition,
                        'target_position' => $targetPosition,
                    ]);
            }
            $this->db->query($update);

            $this->manufacturersEntity->update($id, ['position' => $targetPosition]);
        }

        ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function sortPositions($positions)
    {
        $ids       = array_keys($positions);
        sort($positions);

        foreach ($positions as $i=>$position) {
            $this->manufacturersEntity->update($ids[$i], ['position'=>$position]);
        }

        ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function buildFilter()
    {
        $filter = [];
        $filter['page'] = max(1, $this->request->get('page', 'integer'));

        if ($filter['limit'] = $this->request->get('limit', 'integer')) {
            $filter['limit'] = max(5, $filter['limit']);
            $filter['limit'] = min(100, $filter['limit']);
            $_SESSION['manufacturers_num_admin'] = $filter['limit'];
        } elseif (!empty($_SESSION['manufacturers_num_admin'])) {
            $filter['limit'] = $_SESSION['manufacturers_num_admin'];
        } else {
            $filter['limit'] = 25;
        }

        $keyword = $this->request->get('keyword', 'string');
        if (!empty($keyword)) {
            $filter['keyword'] = $keyword;
        }

        return ExtenderFacade::execute(__METHOD__, $filter, func_get_args());
    }

    public function countManufacturers($filter)
    {
        $manufacturersCount = $this->manufacturersEntity->count($filter);
        return ExtenderFacade::execute(__METHOD__, $manufacturersCount, func_get_args());
    }

    public function makePagination($manufacturersCount, $filter)
    {
        if ($this->request->get('page') == 'all') {
            $filter['limit'] = $manufacturersCount;
        }

        if ($filter['limit']>0) {
            $pagesCount = ceil($manufacturersCount/$filter['limit']);
        } else {
            $pagesCount = 0;
        }

        $filter['page'] = min($filter['page'], $pagesCount);

        return [$filter, $pagesCount];
    }

    public function findManufacturersByCategory($category)
    {
        $manufacturers = $this->manufacturersEntity->find(['category_id' => $category->children]);
        return ExtenderFacade::execute(__METHOD__, $manufacturers, func_get_args());
    }

    public function duplicate($ids)
    {
        foreach($ids as $id) {
            $this->manufacturersEntity->duplicate((int)$id);
        }
        ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }

    public function sortManufacturersPositionsAlphabet()
    {
        $manufacturers = [];
        foreach($this->manufacturersEntity->cols(['id', 'name'])->find() as $b) {
            $manufacturers[$b->id] = $b->name;
        }

        asort($manufacturers, SORT_NATURAL);

        $i = 0;
        $manufacturerIds = array_keys($manufacturers);

        foreach($manufacturerIds as $manufacturerId) {
            $this->manufacturersEntity->update($manufacturerId, ['position'=>$i++]);
        }

        ExtenderFacade::execute(__METHOD__, null, func_get_args());
    }
}