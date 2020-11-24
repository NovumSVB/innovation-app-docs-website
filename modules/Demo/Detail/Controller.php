<?php

namespace InnovationApp\modules\Demo\Detail;

use Api\Store\Plugin\Vo\DataSource;
use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;
use InnovationApp\modules\Demo\ApiHelper;

class Controller extends SiteBaseController
{
    function getCrumbles(): Crumbles
    {
        return new Crumbles([
            new \InnovationApp\modules\Home\Config()
        ]);
    }
    function runSite(): array
    {
        $aAllPages = PageManager::getAll();
        $sApiCode = $this->getApiCode();

        $aApiDetails = ApiHelper::getEndpointByCode($sApiCode);
        $oDataSource = new DataSource($aApiDetails);
        $aArguments = [
            'site_map' => PageManager::getMenu(),
            'system_name' => getSiteSettings()['system_name'],
            'api' => $oDataSource,
        ];

        return [

            'crumbles' => [
                PageManager::getByTag('Home'),
                PageManager::getByTag('Demo'),
                PageManager::getByTag('Home'),
            ],
            'content' => $this->parse('Demo/Detail/detail.twig', $aArguments),
            'title'   => 'Demo + showcase',
        ];
    }


    private function getApiCode():string
    {
        $sRequestUri = $this->getRequestUri();
        $array = explode('/', $sRequestUri);
        return array_pop($array);
    }

}
