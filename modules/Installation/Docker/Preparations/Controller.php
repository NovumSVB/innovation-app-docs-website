<?php
namespace InnovationApp\modules\Installation\Docker\Preparations;

use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;
use InnovationApp\modules\Installation\Config as InstallationConfig;
use InnovationApp\modules\Installation\Docker\Config as DockerConfig;

class Controller extends SiteBaseController
{

    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config(),
            new InstallationConfig(),
            new DockerConfig(),
            new Config()
        ]);
    }

    function runSite():array
    {

        $aArguments = [
            'env_setup_instructions' => Config::getEnvSetupInstructions(),
            'urls' => getSiteSettings()['urls'],
            'system_name' => getSiteSettings()['system_name'],
            'site_map' => PageManager::getAll()
        ];
        return [

            'content' => $this->parse('Installation/Docker/Preparations/preparations.twig', $aArguments),
            'title' => 'Installation via Docker'
        ];
    }
}
