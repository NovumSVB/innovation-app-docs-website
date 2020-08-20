<?php
namespace InnovationApp\Modules\Components;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Components';
    }
    function getBaseUrl(): string
    {
        return '/components';
    }
    function inMenu(): bool
    {
        return true;
    }
}
