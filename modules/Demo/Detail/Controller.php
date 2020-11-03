<?php

namespace InnovationApp\modules\Demo\Detail;

use Core\Config;
use Core\Json\JsonUtils;
use GuzzleHttp\Client;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;
use InnovationApp\Classes\Vo\DataSource;
use InnovationApp\modules\Demo\ApiHelper;
use Model\Logging\Except_log;

class Controller extends SiteBaseController
{
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
