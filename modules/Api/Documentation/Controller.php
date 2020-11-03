<?php
namespace InnovationApp\modules\Api\Documentation;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function runSite():array
    {
        $aArguments = [];

        return [

            'content' => $this->parse('Api/Documentation/documentation.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
