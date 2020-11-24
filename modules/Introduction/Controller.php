<?php
namespace InnovationApp\modules\Introduction;

use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config(),
            new Config()
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
