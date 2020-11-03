<?php
namespace InnovationApp\modules\Components\Admin;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Admin panel';
    }
    function getBaseUrl(): string
    {
        return '/components/admin';
    }
    function inMenu(): bool
    {
        return true;
    }
}
