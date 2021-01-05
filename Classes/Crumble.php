<?php


namespace InnovationApp\Classes;


use Hurah\Types\Type\Url;
use InnovationApp\Contracts\ICrumble;

class Crumble implements ICrumble {


    private string $label;
    private Url $url;
    private bool $isActive;
    private bool $bIsLast = false;

    function __construct(string $sLabel, Url $sUrl, bool $bisActive = false){
        $this->label = $sLabel;
        $this->url = $sUrl;
        $this->isActive = $bisActive;
    }
    function getMenuLabel(): string
    {
        return $this->label;
    }
    function isLast() : bool
    {
        return $this->bIsLast ;
    }
    function setIsLast(bool $bIsLast)
    {
        $this->bIsLast = $bIsLast;
    }

    function getBaseUrl(): string
    {
        return $this->url;
    }

    function isActive(): bool
    {
        return $this->isActive;
    }
}