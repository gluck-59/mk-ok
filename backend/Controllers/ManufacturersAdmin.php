<?php


namespace Okay\Admin\Controllers;


use Okay\Admin\Helpers\BackendManufacturersHelper;
use Okay\Admin\Requests\BackendManufacturersRequest;

class ManufacturersAdmin extends IndexAdmin
{
    
    public function fetch(
        BackendManufacturersHelper  $backendManufacturersHelper,
        BackendManufacturersRequest $backendManufacturersRequest
    ){
        $filter = $backendManufacturersHelper->buildFilter();
        $this->design->assign('current_limit', $filter['limit']);

        // Обработка действий
        if ($this->request->method('post')) {
            // Сортировка
            $positions = $backendManufacturersRequest->postPositions();
            $backendManufacturersHelper->sortPositions($positions);

            if ($this->request->post('alphabet_sort_manufacturers')) {
                $backendManufacturersHelper->sortManufacturersPositionsAlphabet();
            }

            // Действия с выбранными
            $ids = $backendManufacturersRequest->postCheck();
            switch ($backendManufacturersRequest->postAction()) {
                case 'enable': {
                    $backendManufacturersHelper->enable($ids);
                    break;
                }
                case 'disable': {
                    $backendManufacturersHelper->disable($ids);
                    break;
                }
                case 'delete': {
                    $backendManufacturersHelper->delete($ids);
                    break;
                }
                case 'move_to_page': {
                    $targetPage = $this->request->post('target_page', 'integer');
                    $backendManufacturersHelper->moveToPage($ids, $targetPage, $filter);
                    break;
                }
                case 'duplicate': {
                    $backendManufacturersHelper->duplicate($ids);
                    break;
                }
            }
        }

        $manufacturersCount               = $backendManufacturersHelper->countManufacturers($filter);
        list($filter, $pagesCount) = $backendManufacturersHelper->makePagination($manufacturersCount, $filter);
        $manufacturers                    = $backendManufacturersHelper->findManufacturers($filter);
        $keyword                   = isset($filter['keyword']) ? $filter['keyword'] : '';

        $this->design->assign('manufacturers_count', $manufacturersCount);
        $this->design->assign('pages_count',  $pagesCount);
        $this->design->assign('current_page', $filter['page']);
        $this->design->assign('keyword',      $keyword);
        $this->design->assign('manufacturers',       $manufacturers);
        $this->response->setContent($this->design->fetch('manufacturers.tpl'));
    }
}
