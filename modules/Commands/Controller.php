<?php
namespace InnovationApp\modules\Commands;

use Exception\LogicException;
use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function getConfig(): Config
    {
        $oConfig =  parent::getConfig(); // TODO: Change the autogenerated stub

        if(!$oConfig instanceof Config)
        {
            throw new LogicException("Expected an intance of Config");
        }
        return $oConfig;

    }

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
           new \InnovationApp\modules\Home\Config()
        ]);
    }

    function runSite():array
    {
        $aArguments = [
            'system_name' => getSiteSettings()['system_name'],
        ];

        return [
            'content' => $this->parse('Commands/command-overview.twig', $aArguments),
            'title' => 'Commands'
        ];
    }

}