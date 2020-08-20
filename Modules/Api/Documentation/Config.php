<?php
namespace InnovationApp\Modules\Api\Documentation;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
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
