<?php
namespace InnovationApp\modules\Installation\Docker\Start;

use Hurah\Types\Type\Link;
use Hurah\Types\Type\Url;
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

