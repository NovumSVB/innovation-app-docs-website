<?php
namespace InnovationApp\modules\Installation\Composer;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Composer';
    }
    function getBaseUrl(): string
    {
        return '/installation/composer';
    }
    function inMenu(): bool
    {
        return true;
    }
}
