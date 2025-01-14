<?php
namespace Okay\Modules\Gluck\Tochka\Backend\Controllers;
use Okay\Admin\Controllers\IndexAdmin;
use Okay\Modules\Gluck\Tochka\Entities\TochkaEntity;

class TochkaAdmin extends IndexAdmin
{
    private $errors;

    public function fetch(TochkaEntity $tochkaEntity)
    {
        if ($this->request->method('POST')) {
            $settingId = $this->request->post('setting_id');
            $tochkaSettings = $this->request->post('settings');


            // пока только update
            if (!$tochkaEntity->update($settingId, $tochkaSettings)) {
                $this->errors = 'не записано';
            }
        }
        $headers = $tochkaEntity->getAllFieldsWithoutAlias();
        $fields = $tochkaEntity->find();

        $this->design->assign('tableHeaders', $headers);
        $this->design->assign('tableFields', $fields);
        $this->design->assign('errors', $this->errors);
        $this->response->setContent($this->design->fetch('description.tpl'));
    }
}