<?php
namespace InnovationApp\modules\Home;

use InnovationApp\Classes\Crumble;
use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            $this->getConfig()
        ]);
    }

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
