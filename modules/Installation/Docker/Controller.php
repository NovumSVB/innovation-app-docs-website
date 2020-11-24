<?php
namespace InnovationApp\modules\Installation\Docker;

use InnovationApp\Classes\Crumbles;
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
            new DockerConfig()
        ]);
    }

    function runSite():array
    {


        $aArguments = [
            'urls' => getSiteSettings()['urls'],
            'system_name' => getSiteSettings()['system_name']
        ];
        return [

            'content' => $this->parse('Installation/Docker/docker.twig', $aArguments),
            'title' => 'Installation via Docker'
        ];
    }
}
