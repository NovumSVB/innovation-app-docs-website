<?php
namespace InnovationApp\modules\Components\Admin;

use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config()
        ]);
    }
    function runSite():array
    {

        $aArguments = [
            'repositories' => getSiteSettings()['repositories'],
            'site_map' => PageManager::getMenu(),
            'system_name' => getSiteSettings()['system_name']
        ];

        return [

            'content' => $this->parse('Components/Admin/admin.twig', $aArguments),
            'title' => 'Admin panel'
        ];
    }
}
