<?php
namespace InnovationApp\Contracts;

interface IModuleConfig
{
    function getMenuLabel():?string;
    function getBaseUrl():string;
    function inMenu():bool;
}
