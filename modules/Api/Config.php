<?php
namespace InnovationApp\modules\Api;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'API';
    }
    function getBaseUrl(): string
    {
        return '/api';
    }
    function inMenu(): bool
    {
        return true;
    }
}
