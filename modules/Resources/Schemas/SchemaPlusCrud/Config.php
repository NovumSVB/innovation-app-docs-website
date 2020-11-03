<?php
namespace InnovationApp\modules\Resources\Schemas\SchemaPlusCrud;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'schema-plus-crud.xsd';
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
