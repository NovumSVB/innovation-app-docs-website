<?php
namespace InnovationApp\modules\Api;

use InnovationApp\Classes\Crumbles;
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
            'system_name' => getSiteSettings()['system_name']
        ];
        return [


            'content' => $this->parse('Api/api.twig', $aArguments),
            'title' => 'Your API'
        ];
    }
}
