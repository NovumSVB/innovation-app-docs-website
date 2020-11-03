<?php
namespace InnovationApp\modules\Resources\Schemas\ApiInfo;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'api-info.xsd';
    }
    function getBaseUrl(): string
    {
        return '/resources/schemas/api-info';
    }
    function inMenu(): bool
    {
        return true;
    }
}
