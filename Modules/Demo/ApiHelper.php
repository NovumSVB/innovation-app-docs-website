<?php
namespace InnovationApp\Modules\Demo;

use Core\Config;
use Core\Json\JsonUtils;
use GuzzleHttp\Client;
use Model\Logging\Except_log;

class ApiHelper
{
    public static function getEndpointByCode(string $sCode)
    {
        $sDataSource = 'https://api.overheid.demo.novum.nu/v2/rest/datasource/code/' . $sCode;
        return self::fetchJson($sDataSource, 'all-endpoints-cache');
    }
    public static function getAllEndpointsFromApi() : array
    {
        $sDataSource = 'https://api.overheid.demo.novum.nu/v2/rest/datasource/';
        return self::fetchJson($sDataSource, 'all-endpoints-cache');
    }
    private static function fetchJson(string $sUrl, string $sLocalStoreKey):array
    {
        $sAllEndpointsLocalStore = Config::getDataDir(true) . '/' . $sLocalStoreKey . '.json';
        try
        {
            $oClient = new Client();
            $aResult = $oClient->get($sUrl);
            $sBody = $aResult->getBody();
            // Decode first makes sure the data is not stored when json is invalid as an exception will be
            // thrown.
            $aArrayOutput = JsonUtils::decode($sBody);
            file_put_contents($sAllEndpointsLocalStore, $sBody);
        } catch (\Exception $e)
        {
            Except_log::register($e, false);
            $sBody = file_get_contents($sAllEndpointsLocalStore);
            $aArrayOutput = JsonUtils::decode($sBody);
        }
        return $aArrayOutput;
    }
}
