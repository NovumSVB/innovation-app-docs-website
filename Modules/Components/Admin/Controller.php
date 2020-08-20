<?php
namespace InnovationApp\Modules\Components\Admin;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{


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
