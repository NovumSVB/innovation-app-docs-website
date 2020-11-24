<?php
namespace InnovationApp\modules\Introduction;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Introduction';
    }
    function getBaseUrl(): string
    {
        return '/introduction';
    }
    function inMenu(): bool
    {
        return true;
    }
}
