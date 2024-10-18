<?php


namespace Okay\Modules\OkayCMS\AdminGuide\Init;


use Okay\Admin\Controllers\CurrencyAdmin;
use Okay\Core\Modules\AbstractInit;
use Okay\Core\Scheduler\Schedule;
use Okay\Modules\OkayCMS\CurrrencyRates\Backend\Controllers\CurrrencyRatesAdmin;


class Init extends AbstractInit
{
    public function install()
    {
        $this->setBackendMainController('AdminGuideAdmin');
    }

    public function init()
    {
        $this->registerBackendController('AdminGuideAdmin');
        $this->addBackendControllerPermission('AdminGuideAdmin', 'okaycms__admin_guide');


        $this->registerSchedule(
            (new Schedule([CurrencyAdmin::class, 'updateCbr']))
                ->name('Обновляет курсы валют из cron')
                ->time('* * * * *')
                ->overlap(false)
                ->timeout(3600)
        );
    }

}