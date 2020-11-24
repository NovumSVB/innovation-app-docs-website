<?php
namespace InnovationApp\Classes;

use Core\MainController;
use InnovationApp\Contracts\IModuleConfig;

abstract class SiteBaseController extends MainController
{
    private IModuleConfig $oConfig;

    abstract function runSite():array;

    abstract function getCrumbles() : Crumbles;

    function setConfig(IModuleConfig $oConfig):void{
        $this->oConfig  = $oConfig;
    }
    function getConfig() : IModuleConfig
    {
        return $this->oConfig;
    }
    final function run()
    {
        $aData = $this->runSite();


        $aData['menu'] = $this->parse('menu.twig', [
            'menu' => PageManager::getMenu()
        ]);

        $aData['page_title_html'] = getSiteSettings()['page_title_html'];
        return $aData;
    }

}
