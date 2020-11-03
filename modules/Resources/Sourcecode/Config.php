<?php
namespace InnovationApp\modules\Resources\Sourcecode;

use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig
{
    function getMenuLabel(): ?string
    {
        return 'Source code';
    }
    function getBaseUrl(): string
    {
        return '/sourcecode';
    }
    function inMenu(): bool
    {
        return false;
    }
}
