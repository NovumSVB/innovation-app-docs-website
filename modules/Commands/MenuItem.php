<?php
namespace InnovationApp\modules\Commands;

use InnovationApp\Contracts\IMenuItem;

class MenuItem implements IMenuItem
{
    private string $label;
    private string $url;
    private bool $bIsActive = false;
    function __construct(string $sLabel, string $sUrl)
    {
        $this->label = $sLabel;
        $this->url = $sUrl;
    }
    function getMenuLabel(): string
    {
        return $this->label;
    }

    function getUrl(): string
    {
        return $this->url;
    }
    function setIsActive(bool $bool){
        $this->bIsActive = $bool;
    }
    function isActive():bool
    {
        return $this->bIsActive;
    }
}
