<?php
namespace InnovationApp\Modules\Installation\Requirements;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Requirements';
    }
    function getBaseUrl(): string
    {
        return '/installation/requirements';
    }
    function inMenu(): bool
    {
        return true;
    }
}
