<?php
namespace InnovationApp\modules\Resources\Schemas\SchemaXsd;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'schema.xsd';
    }
    function getBaseUrl(): string
    {
        return '/resources/schemas/schema';
    }
    function inMenu(): bool
    {
        return true;
    }
}
