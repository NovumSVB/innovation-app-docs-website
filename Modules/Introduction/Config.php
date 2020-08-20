<?php
namespace InnovationApp\Modules\Introduction;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Introduction';
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
