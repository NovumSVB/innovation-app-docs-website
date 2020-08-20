<?php
namespace InnovationApp\Modules\Installation;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Installation';
    }
    function getBaseUrl(): string
    {
        return '/installation';
    }
    function inMenu(): bool
    {
        return true;
    }
}
