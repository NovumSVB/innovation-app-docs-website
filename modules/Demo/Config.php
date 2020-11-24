<?php
namespace InnovationApp\modules\Demo;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Demo & showcase';
    }
    function getBaseUrl(): string
    {
        return '/demo-system';
    }
    function inMenu(): bool
    {
        return true;
    }
}
