<?php
namespace InnovationApp\Classes;

use Core\MainController;
use InnovationApp\Classes\PageManager;

abstract class SiteBaseController extends MainController
{
    abstract function runSite():array;

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
