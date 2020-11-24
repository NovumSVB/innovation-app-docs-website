<?php
namespace InnovationApp\modules\Resources\Sourcecode;

use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class Controller extends SiteBaseController
{
    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config()
        ]);
    }

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
