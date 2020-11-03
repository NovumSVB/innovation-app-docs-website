<?php
namespace InnovationApp\modules\Resources\Sourcecode;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{

    function runSite():array
    {
        $aSchemas =  getSiteSettings()['schemas'];
        $aArguments = [
            'repositories' => getSiteSettings()['repositories'],
            'schemas' => $aSchemas
        ];

        return [

            'content' => $this->parse('Resources/Sourcecode/sourcecode.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
