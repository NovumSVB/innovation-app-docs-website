<?php
namespace InnovationApp\modules\Resources\Schemas;

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

            'content' => $this->parse('Resources/Schemas/schemas.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
