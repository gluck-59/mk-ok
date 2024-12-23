<?php
namespace Okay\Modules\Gluck\EbayUpdater\Backend\Controllers;
use Okay\Admin\Controllers\IndexAdmin;
use Okay\Modules\Gluck\EbayUpdater\Entities\EbayUpdaterEntity;

class EbayUpdaterAdmin extends IndexAdmin
{

    public function fetch(EbayUpdaterEntity $ebayUpdaterEntity)
    {
        $fields = EbayUpdaterEntity::getFields();
//        foreach ($fields as $key => $field) {
//            if (in_array($field, ['success'])) {
//                unset($fields[$key]);
//            }
//        }
        $this->design->assign('tableFields', $fields);
        $this->design->assign('items', $ebayUpdaterEntity->find());
        $this->response->setContent($this->design->fetch('description.tpl'));
    }
}