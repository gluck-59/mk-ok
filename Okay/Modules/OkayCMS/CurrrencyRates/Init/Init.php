<?php
// видео по созданию плагинов https://www.youtube.com/watch?v=JDqGcWaX5zc&t=257s


namespace Okay\Modules\OkayCMS\CurrrencyRates\Init;

use Okay\Core\Modules\AbstractInit;
use Okay\Modules\OkayCMS\CurrrencyRates\Backend\Controllers\CurrrencyRatesAdmin;
use Okay\Core\Scheduler\Schedule;

class Init extends AbstractInit {

    public function install()
    {
        $this->setBackendMainController('CurrrencyRatesAdmin');
    }


    public function init()
    {
        $this->registerBackendController('CurrrencyRatesAdmin');
        $this->addBackendControllerPermission('CurrrencyRatesAdmin', 'currency');


//$this->registerSchedule(
//    (new Schedule([CurrrencyRatesAdmin::class, 'updateCbr']))
//        ->name('Обновляет курсы валют из cron')
//        ->time('* * * * *')
//        ->overlap(false)
//        ->timeout(3600)
//);

//echo '<pre>';
//print_r($this);
//echo '</pre>';
    }

}