<?php

namespace InnovationApp\modules\Demo;

use Core\Config;
use Core\Json\JsonUtils;
use GuzzleHttp\Client;
use InnovationApp\Classes\Crumbles;
use InnovationApp\Classes\PageManager;
use InnovationApp\Classes\SiteBaseController;
use Model\Logging\Except_log;

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

        $aApiCollection = $this->getAllEndpointsFromApi();

        $aArguments = [
            'site_map'    => PageManager::getMenu(),
            'system_name' => getSiteSettings()['system_name'],
            'api_collection'   => $aApiCollection,
        ];

        return [

            'content' => $this->parse('Demo/demo.twig', $aArguments),
            'title'   => 'Demo + showcase',
        ];
    }

    private function getAllEndpointsFromApi() : array
    {
         $sAllEndpointsLocalStore = Config::getDataDir(true) . '/all-endpoints-cache.json';

        try
        {
            $sDataSource = 'https://api.overheid.demo.novum.nu/v2/rest/datasource/';
            $oClient = new Client();
            $aResult = $oClient->get($sDataSource);
            $sAllApis = $aResult->getBody();
            // Decode first makes sure the data is not stored when json is invalid as an exception will be
            // thrown.
            $aAllApis = JsonUtils::decode($sAllApis);
            file_put_contents($sAllEndpointsLocalStore, $sAllApis);
        } catch (\Exception $e)
        {
            Except_log::register($e, false);
            $sAllApis = file_get_contents($sAllEndpointsLocalStore);
            $aAllApis = JsonUtils::decode($sAllApis);
        }
        return $aAllApis;
    }
}
