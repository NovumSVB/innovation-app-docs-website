<?php
namespace InnovationApp\modules\Resources\Schemas;

use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;

class DetailController extends SiteBaseController
{
    function runSite():array
    {

        $aArguments = [
            'repositories' => getSiteSettings()['repositories'],
            'schemas' => getSiteSettings()['schemas']
        ];

        return [

            'content' => $this->parse('Resources/Schemas/schemas.twig', $aArguments),
            'title' => 'Welcome'
        ];
    }
}
