<?php

namespace InnovationApp\modules\Commands;

use Cli\Helper\Application\ApplicationLoader;
use Core\Utils as CoreUtils;
use InnovationApp\Classes\Util;
use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Commands';
    }


    function getBaseUrl(): string
    {
        return '/commands';
    }

    function inMenu(): bool
    {
        return true;
    }

    static function getCommands(): array
    {

        $aPages = [];

        if (preg_match('/^\/commands/', Util::getRequestUri())) {
            $oApplicationLoader = new ApplicationLoader();
            $oApplication = $oApplicationLoader->load();

            $aCommands = $oApplication->all();
            $sRequestUri = Util::getRequestUri();
            foreach ($aCommands as $oCommand) {

                $sSlug = CoreUtils::slugify($oCommand->getName());
                $sUrl = CoreUtils::makeUrl("/commands/{$sSlug}");

                $oMenuItem = new MenuItem($oCommand->getName(), $sUrl);


                $oMenuItem->setIsActive($sRequestUri == $sUrl);
                $aPages[] = [
                    'command' => $oCommand,
                    'page' => $oMenuItem
                ];
            }
        }

        return $aPages;
    }
}
