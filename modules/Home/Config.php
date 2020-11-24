<?php
namespace InnovationApp\modules\Home;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Home';
    }
    function getBaseUrl(): string
    {
        return '/';
    }
    function inMenu(): bool
    {
        return false;
    }
}
