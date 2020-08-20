<?php
namespace InnovationApp\Modules\Installation;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{


    function runSite():array
    {

        $aInstallation = [
            'system_name' => getSiteSettings()['system_name'],
            'site_map' => PageManager::getAll(),
        ];

        return [

            'content' => $this->parse('Installation/installation.twig', $aInstallation),
            'title' => 'Installation'
        ];
    }
}
