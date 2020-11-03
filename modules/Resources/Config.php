<?php
namespace InnovationApp\modules\Resources;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Resources';
    }
    function getBaseUrl(): string
    {
        return '/';
    }
    function inMenu(): bool
    {
        return false;
    }
}
