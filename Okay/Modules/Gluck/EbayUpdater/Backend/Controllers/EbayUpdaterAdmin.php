<?php
namespace Okay\Modules\Gluck\EbayUpdater\Backend\Controllers;
use Okay\Admin\Controllers\IndexAdmin;
use Okay\Modules\Gluck\EbayUpdater\Entities\EbayUpdaterEntity;

class EbayUpdaterAdmin extends IndexAdmin
{

    public function fetch(EbayUpdaterEntity $ebayUpdaterEntity)
    {
        $headers = $ebayUpdaterEntity->getAllFieldsWithoutAlias();
        $fields = $ebayUpdaterEntity->getUpdated();

        $this->design->assign('tableHeaders', $headers);
        $this->design->assign('tableFields', $fields);
        $this->response->setContent($this->design->fetch('description.tpl'));
    }
}