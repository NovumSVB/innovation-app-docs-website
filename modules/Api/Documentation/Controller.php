<?php
namespace InnovationApp\modules\Api\Documentation;

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
        $aArguments = [];

        return [

            'content' => $this->parse('Api/Documentation/documentation.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
