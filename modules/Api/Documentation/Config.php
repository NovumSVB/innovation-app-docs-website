<?php
namespace InnovationApp\modules\Api\Documentation;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Documentation';
    }
    function getBaseUrl(): string
    {
        return '/api/documentation';
    }
    function inMenu(): bool
    {
        return false;
    }
}
