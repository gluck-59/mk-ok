<?php


namespace Okay\Core\Routes;


use Okay\Core\Routes\Strategies\Manufacturer\NoPrefixStrategy;
use Okay\Core\Routes\Strategies\Manufacturer\DefaultStrategy;

class ManufacturerRoute extends AbstractRoute
{
    const MANUFACTURER_ROUTE_TEMPLATE = 'manufacturer_routes_template';
    const TYPE_NO_PREFIX       = 'no_prefix';
    const SLASH_END            = 'manufacturer_routes_template_slash_end';

    public function hasSlashAtEnd()
    {
        return intval($this->settings->get(static::SLASH_END)) === 1;
    }

    protected function getStrategy()
    {
        if (static::TYPE_NO_PREFIX === $this->settings->get(static::MANUFACTURER_ROUTE_TEMPLATE)) {
            return new NoPrefixStrategy();
        }

        return new DefaultStrategy();
    }
}