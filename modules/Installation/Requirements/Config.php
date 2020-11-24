<?php
namespace InnovationApp\modules\Installation\Requirements;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Requirements';
    }
    function getBaseUrl(): string
    {
        return '/installation/requirements';
    }
    function inMenu(): bool
    {
        return true;
    }
}
