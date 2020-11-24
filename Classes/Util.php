<?php
namespace InnovationApp\Classes;

class Util
{

    static function getRequestUri():string {
        $sRequestUri = $_SERVER['REQUEST_URI'];
        return preg_replace('/^\/v1/', '', $sRequestUri);
    }
    static function getModuleRoot():string
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . getSiteSettings()['module_dir'];
    }
}
