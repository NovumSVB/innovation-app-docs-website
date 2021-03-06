<?php
namespace InnovationApp\modules\Installation\Composer;

use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
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
