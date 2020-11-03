<?php
namespace InnovationApp\modules\Components\Modeller;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Modeller';
    }
    function getBaseUrl(): string
    {
        return '/components/modeller';
    }
    function inMenu(): bool
    {
        return true;
    }
}
