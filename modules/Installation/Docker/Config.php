<?php
namespace InnovationApp\modules\Installation\Docker;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Docker';
    }
    function getBaseUrl(): string
    {
        return '/installation/docker';
    }
    function inMenu(): bool
    {
        return true;
    }
}
