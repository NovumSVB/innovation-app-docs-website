<?php
namespace InnovationApp\modules\Installation\Docker\Start;

use Core\DataType\Link;
use Core\DataType\Url;
use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Start';
    }
    function getBaseUrl(): string
    {
        return '/installation/docker/start';
    }



    function inMenu(): bool
    {
        return true;
    }
}

