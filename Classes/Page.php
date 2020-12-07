<?php
namespace InnovationApp\Classes;

use Core\DataType\Link;
use Core\DataType\Url;
use InnovationApp\Contracts\IMenuItem;
use InnovationApp\Contracts\IModuleConfig;

class Page implements IMenuItem
{
    private $oController;
    private $oConfig;

    function __construct(string $oController, string $oConfig)
    {
        $this->oController = $oController;
        $this->oConfig = new $oConfig;
    }
    function isActive() : bool {
        return PageManager::isActive(Util::getRequestUri(), $this);
    }
    function getConfig():IModuleConfig
    {
        return $this->oConfig;
    }
    function getMenuLabel():string
    {
        return $this->getConfig()->getMenuLabel();
    }
    function getLink():Link
    {
        return Link::construct($this->getConfig()->getMenuLabel(), new Url($this->getConfig()->getBaseUrl()));
    }
    function getUrl():string
    {
        return $this->oConfig->getBaseUrl();
    }
    function getController($aGet, $aPost):SiteBaseController
    {
        $oController = new $this->oController($aGet, $aPost);
        if(!$oController instanceof SiteBaseController) {
            throw new \InvalidArgumentException("Expected an intance of SiteBaseController");
        }
        $oController->setConfig($this->getConfig());
        return $oController;
    }
}
