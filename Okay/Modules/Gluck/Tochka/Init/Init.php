<?php
namespace Okay\Modules\Gluck\Tochka\Init;

use Okay\Core\Modules\AbstractInit;
//use Okay\Core\Scheduler\Schedule;
//use Okay\Core\Settings;
use Okay\Modules\Gluck\Tochka\Entities\TochkaEntity;
use Okay\Core\Modules\EntityField;

class Init extends AbstractInit
{
    public function install()
    {
        $this->setBackendMainController('TochkaAdmin');
        $this->setModuleType(MODULE_TYPE_PAYMENT);

        // таблица ebayUpdater_report создается при инсталл модуля
        $this->migrateEntityTable(TochkaEntity::class, [
            (new EntityField('id'))->setIndexPrimaryKey()->setTypeInt(11, false)->setAutoIncrement(),
            (new EntityField('rs_url'))->setTypeText(),
            (new EntityField('api_version'))->setTypeText(),
            (new EntityField('merchantId'))->setTypeText(),
            (new EntityField('legalId'))->setTypeText(),
            (new EntityField('customerCode'))->setTypeInt(9),
            (new EntityField('accountId'))->setTypeText(),
            (new EntityField('accesstoken_hybrid'))->setTypeText()
        ]);
    }


    public function init()
    {
        $this->registerBackendController('TochkaAdmin');
        $this->addBackendControllerPermission('TochkaAdmin', 'gluck__tochkaAdmin');
    }
}
