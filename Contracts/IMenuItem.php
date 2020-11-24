<?php
namespace InnovationApp\Contracts;

use InnovationApp\Contracts\IModuleConfig;

interface IMenuItem
{
    function getMenuLabel():string;
    function getUrl():string;
}