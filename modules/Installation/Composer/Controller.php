<?php
namespace InnovationApp\modules\Installation\Composer;

use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\SiteBaseController;
use InnovationApp\modules\Installation\Config as InstallationConfig;
use InnovationApp\modules\Installation\Composer\Config as ComposerConfig;


class Controller extends SiteBaseController
{


    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config(),
            new InstallationConfig(),
            new ComposerConfig()
        ]);
    }
    function runSite():array
    {
        $aArguments = [
            'urls' => getSiteSettings()['urls'],
            'system_name' => getSiteSettings()['system_name']
        ];
        return [

            'content' => $this->parse('Installation/Composer/composer.twig', $aArguments),
            'title' => 'Installation via Composer'
        ];
    }
}
