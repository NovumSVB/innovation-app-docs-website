<?php
namespace InnovationApp\modules\Resources;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{


    function runSite():array
    {

        $aArguments = [
            'repositories' => getSiteSettings()['repositories'],
            'schemas' => getSiteSettings()['schemas']
        ];

        return [

            'content' => $this->parse('Resources/page.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
