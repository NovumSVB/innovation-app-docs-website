<?php

namespace InnovationApp\modules\Commands\Single;

use Exception\ClassNotFoundException;
use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;
use InnovationApp\modules\Commands\Config as CommandConfig;
use Symfony\Component\Console\Command\Command;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return $this->getSelectedCommand()->getName();
    }


    function getBaseUrl(): string
    {
        return '/\/commands/';
    }

    function inMenu(): bool
    {
        return false;
    }


    function getSelectedCommand(): Command
    {
        $aCommands = CommandConfig::getCommands();
        foreach ($aCommands as $command) {
            if ($command['page']->isActive()) {
                return $command['command'];
            }
        }
        throw new ClassNotFoundException("No active command found.");
    }


    function isCommandDetailPage(): bool
    {
        $aCommands = CommandConfig::getCommands();
        foreach ($aCommands as $command) {
            if ($command['page']->isActive()) {
                return true;
            }
        }
        return false;
    }

}
