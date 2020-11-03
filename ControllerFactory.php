<?php
namespace InnovationApp;

use _Default\ControllerFactory as _DefaultControllerFactory;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\Page;
use InnovationApp\modules\Home\Controller;
use Core\IControllerFactory;
use Core\MainController;

class ControllerFactory extends _DefaultControllerFactory implements IControllerFactory
{
    public function getController(array $aGet, array $aPost, string $sNamespace = null):MainController
    {
        $sRequestUri = $_SERVER['REQUEST_URI'];


        $sRequestUri = preg_replace('/^\/v1/', '', $sRequestUri);
        // $aParts = explode('?', $sRequestUri);

        $oPage = PageManager::getActive($sRequestUri);

        if($oPage instanceof Page)
        {
            $oController = $oPage->getController($aGet, $aPost);
        }
        else if($sRequestUri === '/')
        {
            $oController = new Controller($aGet, $aPost);
        }

        return $oController;
    }
}
