<?php
namespace InnovationApp\Classes;

class Util
{

    static function getModuleRoot():string
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . getSiteSettings()['module_dir'];
    }
}
