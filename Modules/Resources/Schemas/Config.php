<?php
namespace InnovationApp\Modules\Resources\Schemas;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Schema files';
    }
    function getBaseUrl(): string
    {
        return '/schemas';
    }
    function inMenu(): bool
    {
        return false;
    }
}
