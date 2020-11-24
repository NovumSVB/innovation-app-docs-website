<?php
namespace InnovationApp\modules\Commands\Single;

use Exception\LogicException;
use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\SiteBaseController;
use InnovationApp\modules\Commands\Config as CommandsConfig;
use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Helper\DescriptorHelper;

class Controller extends SiteBaseController
{

    function getConfig(): Config
    {
        $oConfig =  parent::getConfig();

        if(!$oConfig instanceof Config)
        {
            throw new LogicException("Expected an intance of Config");
        }
        return $oConfig;

    }

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config(),
            new CommandsConfig(),
            $this->getConfig()
        ]);
    }


    function runSite():array
    {
        $oCommand = $this->getConfig()->getSelectedCommand();

        $oDescriptorHelper = new DescriptorHelper();

        $aArguments = [
            'command' => [
                'name' => $oCommand->getName(),
                'usage' => $oCommand->getSynopsis(true),
                'description' => $oCommand->getDescription(),
                'definition' => $oCommand->getDefinition(),
                'help' => nl2br($oCommand->getHelp())
            ],
            'system_name' => getSiteSettings()['system_name'],
        ];

        return [
            'content' => $this->parse('Commands/Single/command.twig', $aArguments),
            'title' => 'Commands'
        ];
    }
}
