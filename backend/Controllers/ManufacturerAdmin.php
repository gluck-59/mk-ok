<?php


namespace Okay\Admin\Controllers;


use Okay\Admin\Helpers\BackendManufacturersHelper;
use Okay\Admin\Helpers\BackendValidateHelper;
use Okay\Admin\Requests\BackendManufacturersRequest;

class ManufacturerAdmin extends IndexAdmin
{
    
    public function fetch(
        BackendManufacturersRequest  $manufacturersRequest,
        BackendValidateHelper $backendValidateHelper,
        BackendManufacturersHelper   $backendManufacturersHelper
    ) {
        if ($this->request->method('post')) {
            $manufacturer = $manufacturersRequest->postManufacturer();

            if ($error = $backendValidateHelper->getManufacturersValidateError($manufacturer)) {
                $this->design->assign('message_error', $error);
            } else {
                // Производитель
                if (empty($manufacturer->id)) {
                    $preparedManufacturer = $backendManufacturersHelper->prepareAdd($manufacturer);
                    $manufacturer->id     = $backendManufacturersHelper->add($preparedManufacturer);

                    $this->postRedirectGet->storeMessageSuccess('added');
                    $this->postRedirectGet->storeNewEntityId($manufacturer->id);
                } else {
                    $preparedManufacturer = $backendManufacturersHelper->prepareUpdate($manufacturer);
                    $backendManufacturersHelper->update($preparedManufacturer->id, $preparedManufacturer);

                    $this->postRedirectGet->storeMessageSuccess('updated');
                }

                // Картинка
                if ($manufacturersRequest->postDeleteImage()) {
                    $backendManufacturersHelper->deleteImage($manufacturer);
                }

                if ($image = $manufacturersRequest->fileImage()) {
                    $backendManufacturersHelper->uploadImage($image, $manufacturer);
                }

                //  сохранить и выход в список
                $buttonRedirectToList = $this->request->post('apply_and_quit', 'integer', 0);
                if (($buttonRedirectToList == 1) && !empty($urlRedirectToList = $this->request->getRootUrl() . '/backend/index.php?controller=ManufacturersAdmin')) {
                    $this->postRedirectGet->redirect($urlRedirectToList);
                }

                $this->postRedirectGet->redirect();
            }
        } else {
            $manufacturerId = $this->request->get('id', 'integer');
            $manufacturer   = $backendManufacturersHelper->getManufacturer($manufacturerId);
        }

        $this->design->assign('manufacturer', $manufacturer);
        $this->response->setContent($this->design->fetch('manufacturer.tpl'));
    }
    
}
