<?php


namespace Okay\Core\Routes\Strategies\Manufacturer;


use Okay\Core\EntityFactory;
use Okay\Core\Routes\Strategies\AbstractRouteStrategy;
use Okay\Core\Settings;
use Okay\Core\ServiceLocator;
use Okay\Entities\ManufacturersEntity;

class DefaultStrategy extends AbstractRouteStrategy
{
    /** @var Settings */
    private $settings;

    /** @var ManufacturersEntity */
    private $manufacturersEntity;

    private $mockRouteParams;


    public function __construct()
    {
        $serviceLocator = ServiceLocator::getInstance();

        /** @var EntityFactory $entityFactory */
        $entityFactory = $serviceLocator->getService(EntityFactory::class);

        $this->settings = $serviceLocator->getService(Settings::class);

        $this->manufacturersEntity = $entityFactory->get(ManufacturersEntity::class);

        if (empty($prefix = $this->settings->get('manufacturer_routes_template__default'))) {
            $prefix = 'manufacturer';
        }

        $this->mockRouteParams = [
            '/'.$prefix.'/{$url}/?{$filtersUrl}', [
                '{$url}' => ' ', '{$filtersUrl}' => '(.*)'
            ],
            []
        ];
    }

    public function generateRouteParams($url)
    {
        if (empty($prefix = $this->settings->get('manufacturer_routes_template__default'))) {
            $prefix = 'manufacturer';
        }

        $url = $this->matchManufacturerUrlFromUri($url, $prefix);

        $manufacturerId = $this->manufacturersEntity->col('id')->find(['url' => $url]);

        if (empty($manufacturerId)) {
            return $this->mockRouteParams;
        }

        return [
            '/'.$prefix.'/{$url}/?{$filtersUrl}', [
                '{$url}' => '([^/]*)', '{$filtersUrl}' => '(.*)'
            ],
            []
        ];
    }

    private function matchManufacturerUrlFromUri($url, $prefix) : ?string
    {
        preg_match("/^{$prefix}\/([^\/]*)/", $url, $matches);

        return $matches[1] ?? null;
    }
}