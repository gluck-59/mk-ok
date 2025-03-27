<?php


namespace Okay\Admin\Controllers;


class StatsAdmin extends IndexAdmin
{

    /*Отображение модуля статистики продаж*/
    public function fetch()
    {

        // статистика просмотров товаров
//        $this->design->assign('jopa', ['f', 'd']);

        $this->response->setContent($this->design->fetch('stats.tpl'));
    }
    
}
