<?php
namespace InnovationApp\modules\Components;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Components';
    }
    function getBaseUrl(): string
    {
        return '/components';
    }
    function inMenu(): bool
    {
        return true;
    }
}
