<?php
namespace InnovationApp\Modules\Api;

use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{
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
