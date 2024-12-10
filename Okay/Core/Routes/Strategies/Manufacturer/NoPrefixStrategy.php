<?php


namespace Okay\Core\Routes\Strategies\Manufacturer;


use Okay\Core\EntityFactory;
use Okay\Core\Routes\Strategies\AbstractRouteStrategy;
use Okay\Core\ServiceLocator;
use Okay\Entities\ManufacturersEntity;

class NoPrefixStrategy extends AbstractRouteStrategy
{
    /**
     * @var ManufacturersEntity
     */
    private $manufacturersEntity;

    private $mockRouteParams = ['{$url}', ['{$url}' => ''], ['{$url}' => '']];

    public function __construct()
    {
        $serviceLocator = ServiceLocator::getInstance();
        $entityFactory  = $serviceLocator->getService(EntityFactory::class);

        $this->manufacturersEntity = $entityFactory->get(ManufacturersEntity::class);
    }

    public function generateRouteParams($url)
    {
        $manufacturerUrl = $this->matchCategoryUrl($url);
        $manufacturer    = $this->manufacturersEntity->get((string) $manufacturerUrl);

        if (empty($manufacturer)) {
            return $this->mockRouteParams;
        }

        return [
            '/{$url}/?{$filtersUrl}',
            [
                '{$url}' => $manufacturerUrl,
                '{$filtersUrl}' => $this->matchFiltersUrl($manufacturerUrl, $url)
            ],
            [
                '{$url}' => $manufacturerUrl,
                '{$filtersUrl}' => $this->matchFiltersUrl($manufacturerUrl, $url)
            ]
        ];
    }

    private function matchCategoryUrl($url)
    {
        preg_match("/([^\/]+)/ui", $url, $matches);

        if (isset($matches[1])) {
            return $matches[1];
        }

        return '';
    }

    private function matchFiltersUrl($manufacturerUrl, $url)
    {
        return substr($url, strlen($manufacturerUrl) + 1);
    }
}