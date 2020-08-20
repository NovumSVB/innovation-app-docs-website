<?php
namespace InnovationApp\Classes;

use InnovationApp\Contracts\IModuleConfig;

class Page
{
    private $oController;
    private $oConfig;

    function __construct(string $oController, string $oConfig)
    {
        $this->oController = $oController;
        $this->oConfig = new $oConfig;
    }
    function getConfig():IModuleConfig
    {
        return $this->oConfig;
    }
    function getMenuLabel():string
    {
        return $this->getConfig()->getMenuLabel();
    }
    function getUrl():string
    {
        return $this->oConfig->getBaseUrl();
    }
    function getController($aGet, $aPost):SiteBaseController
    {
        return new $this->oController($aGet, $aPost);
    }
}
