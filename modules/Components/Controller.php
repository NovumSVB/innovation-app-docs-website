<?php
namespace InnovationApp\modules\Components;

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

        return [

            'content' => 'xxx',
            'title' => 'yyy'
        ];
    }
}
