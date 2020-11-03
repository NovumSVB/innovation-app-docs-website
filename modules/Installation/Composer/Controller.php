<?php
namespace InnovationApp\modules\Installation\Composer;

use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{
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
