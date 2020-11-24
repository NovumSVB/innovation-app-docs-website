<?php
namespace InnovationApp\modules\Resources\Schemas;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Schema files';
    }
    function getBaseUrl(): string
    {
        return '/schemas';
    }
    function inMenu(): bool
    {
        return false;
    }
}
