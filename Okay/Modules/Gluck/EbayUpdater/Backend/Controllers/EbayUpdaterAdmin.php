<?php
namespace Okay\Modules\Gluck\EbayUpdater\Backend\Controllers;
use Okay\Admin\Controllers\IndexAdmin;
class EbayUpdaterAdmin extends IndexAdmin
{
    public function fetch()
    {
        $this->response->setContent($this->design->fetch('description.tpl'));
    }
}