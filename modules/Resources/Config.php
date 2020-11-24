<?php
namespace InnovationApp\modules\Resources;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Resources';
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
