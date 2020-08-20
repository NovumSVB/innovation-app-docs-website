<?php
namespace InnovationApp\Modules\Demo\Detail;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Demo & showcase';
    }
    function getBaseUrl(): string
    {
        return '/\/demo\\-system\/details\/.+/';
    }
    function inMenu(): bool
    {
        return true;
    }
}
