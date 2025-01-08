<?php

namespace Okay\Modules\OkayCMS\Feeds\Core\Presets\Adapters;

use Aura\Sql\ExtendedPdo;
use Okay\Core\Database;
use Okay\Core\Design;
use Okay\Core\Image;
use Okay\Core\Languages;
use Okay\Core\Modules\Extender\ExtenderFacade;
use Okay\Core\Money;
use Okay\Core\QueryFactory;
//use Okay\Core\QueryFactory\Select;
use Okay\Core\Response;
//use Okay\Core\Router;
//use Okay\Core\Routes\ProductRoute;
use Okay\Core\Settings;
use Okay\Entities\CategoriesEntity;
//use Okay\Entities\BrandsEntity;
use Okay\Entities\CurrenciesEntity;
//use Okay\Entities\FeaturesEntity;
//use Okay\Entities\FeaturesValuesEntity;
//use Okay\Entities\ProductsEntity;
//use Okay\Entities\VariantsEntity;
use Okay\Helpers\XmlFeedHelper;
use Okay\Modules\OkayCMS\Feeds\Core\Presets\AbstractPresetAdapter;
use Okay\Modules\OkayCMS\Feeds\Entities\FeedsEntity;
use Okay\Modules\OkayCMS\Feeds\Helpers\FeedsHelper;

class PromUaAdapter extends AbstractPresetAdapter
{
    /** @var string */
    static protected $headerTemplate = 'presets/prom_ua/header.tpl';

    /** @var string */
    static protected $footerTemplate = 'presets/prom_ua/footer.tpl';

    private $uaLang;

    private string $siteNameUa;
    private array $allCategoriesUa;
    private object $defaultProductsSeoPatternUa;

    public function __construct(
        Money            $money,
        Design           $design,
        QueryFactory     $queryFactory,
        Database         $database,
        XmlFeedHelper    $xmlFeedHelper,
        Response         $response,
        ExtendedPdo      $pdo,
        Settings         $settings,
        Languages        $languages,
        Image            $image,
        CurrenciesEntity $currenciesEntity,
        FeedsEntity      $feedsEntity,
        CategoriesEntity $categoriesEntity,
        FeedsHelper      $feedHelper
    ) {
        parent::__construct(
            $money,
            $design,
            $queryFactory,
            $database,
            $xmlFeedHelper,
            $response,
            $pdo,
            $settings,
            $languages,
            $image,
            $currenciesEntity,
            $feedsEntity,
            $categoriesEntity,
            $feedHelper
        );
       }

    public function render($feed): void {
        $excludedCategoryIds = $this->getExcludedCategoryIds($feed->id);

        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement('SELECT * FROM '.$this->categoriesEntity::getTable().' WHERE id NOT IN ('.implode(",", $excludedCategoryIds).') and visible = 1');

        $this->database->query($sql);
        $allCategories = $this->database->results();


        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement('SELECT * FROM ok_brands where visible = 1 ORDER BY name');

        $this->database->query($sql);
        $allBrands = $this->database->results();

        $this->design->assign('allCategories', $allCategories);
        $this->design->assign('allBrands', $allBrands);
        $this->response->setContentType(RESPONSE_XML);
        $this->response->sendHeaders();
        $this->response->sendStream($this->design->fetch($this->getHeaderTemplate()));
    }



    public function getItem(object $product, bool $addVariantUrl = false): array
    {
        return ExtenderFacade::execute(__METHOD__, [], func_get_args());
    }
}