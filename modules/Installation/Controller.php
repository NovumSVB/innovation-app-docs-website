<?php
namespace InnovationApp\modules\Installation;

use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config(),
            new Config()
        ]);
    }

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
