<?php
namespace Okay\Modules\Gluck\EbayUpdater\Init;

use Okay\Admin\Controllers\EbayAdmin;
use Okay\Core\Modules\AbstractInit;
use Okay\Core\Scheduler\Schedule;
use Okay\Modules\Gluck\EbayUpdater\Entities\EbayUpdaterEntity;
use Okay\Core\Modules\EntityField;
use Okay\Modules\Gluck\EbayUpdater\Backend\Controllers\EbayUpdaterAdmin;
use Okay\Modules\Gluck\EbayUpdater\Helpers\EbayUpdaterHelper;

class Init extends AbstractInit
{
    public function install()
    {
        $this->setBackendMainController('EbayUpdaterAdmin');

        // таблица ebayUpdater_report создается при инсталл модуля
        $this->migrateEntityTable(EbayUpdaterEntity::class, [
            (new EntityField('id'))->setIndexPrimaryKey()->setTypeInt(11, false)->setAutoIncrement(),
            (new EntityField('variant_id'))->setTypeInt(11, false),
            (new EntityField('newEbayItem_id'))->setTypeVarchar(256),
            (new EntityField('old_currency_id'))->setTypeTinyInt(2),
            (new EntityField('new_currency_id'))->setTypeTinyInt(2),
            (new EntityField('old_price'))->setTypeDecimal('14,2'),
            (new EntityField('new_price'))->setTypeDecimal('14,2'),
            (new EntityField('updated'))->setTypeDatetime(),
            (new EntityField('success'))->setTypeTinyInt(1),
            (new EntityField('description'))->setTypeVarchar(64) // описание почему неудачно
        ]);
    }


    public function init()
    {
        $this->registerBackendController('EbayUpdaterAdmin');
        $this->addBackendControllerPermission('EbayUpdaterAdmin', 'gluck__ebayupdater');

        // overlap: По-умолчанию допускается выполнение более одного экземпляра задачи. Если вызвать метод и передать false, то одновременно будет выполняться не более 1 экземпляра.
        // timeout: Максимальное время выполнения задачи в секундах. По истечению времени задача будет завершена в аварийном режиме.
        $this->registerSchedule(
            (new Schedule([EbayUpdaterHelper::class, 'cronEbayUpdater']))
                ->name('обновляет цены с Ebay')
                ->time('0 0 * * *')
                ->overlap(false)
                ->timeout(3600)
        );
    }
}
