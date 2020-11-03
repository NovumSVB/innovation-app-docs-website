<?php
namespace InnovationApp\modules\Home;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Home';
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
