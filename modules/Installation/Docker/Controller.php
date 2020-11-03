<?php
namespace InnovationApp\modules\Installation\Docker;

use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{


    function runSite():array
    {


        $aArguments = [
            'urls' => getSiteSettings()['urls'],
            'system_name' => getSiteSettings()['system_name']
        ];
        return [

            'content' => $this->parse('Installation/Docker/docker.twig', $aArguments),
            'title' => 'Installation via Docker'
        ];
    }
}
