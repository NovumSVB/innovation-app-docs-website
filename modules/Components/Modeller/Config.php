<?php
namespace InnovationApp\modules\Components\Modeller;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Modeller';
    }
    function getBaseUrl(): string
    {
        return '/components/modeller';
    }
    function inMenu(): bool
    {
        return true;
    }
}
