<?php
namespace InnovationApp\Modules\Installation\Requirements;

use Core\Utils;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{


    function runSite():array
    {

        $sRequirementsJsonUrl = 'https://gitlab.com/NovumGit/innovation-app-core/-/blob/master/assets/installation/system-requirements.json';
        $sRequirementsJsonUrlRaw = 'https://gitlab.com/NovumGit/innovation-app-core/-/raw/master/assets/installation/system-requirements.json';

        $aRequirements = json_decode(file_get_contents($sRequirementsJsonUrlRaw), true);


        $aArguments = [
            'url' => [
                'requirements_repo' => $sRequirementsJsonUrl
            ],
            'requirements' => $aRequirements,
            'site_map' => PageManager::getAll(),
            'system_name' => getSiteSettings()['system_name']
        ];
        return [

            'content' => $this->parse('Installation/Requirements/requirements.twig', $aArguments),
            'title' => 'Server requirements'
        ];
    }
}
