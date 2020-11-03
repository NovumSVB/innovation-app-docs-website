<?php
namespace InnovationApp\modules\Home;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{


    function runSite():array
    {

        $aArguments = [
            'repositories' => getSiteSettings()['repositories'],
            'site_map' => PageManager::getAll(),
            'system_name' => getSiteSettings()['system_name']
        ];

        return [

            'content' => $this->parse('Home/home.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
