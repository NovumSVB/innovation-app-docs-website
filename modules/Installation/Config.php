<?php
namespace InnovationApp\modules\Installation;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Installation';
    }
    function getBaseUrl(): string
    {
        return '/installation';
    }
    function inMenu(): bool
    {
        return true;
    }
}
