<?php
namespace InnovationApp\modules\Resources\Schemas;

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

            'content' => $this->parse('Resources/Schemas/schemas.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
