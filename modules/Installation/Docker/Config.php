<?php
namespace InnovationApp\modules\Installation\Docker;

use Core\DataType\Link;
use Core\DataType\Url;
use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Docker';
    }
    function getBaseUrl(): string
    {
        return '/installation/docker';
    }
    static function getSoftwareRequirements():array {

        return [
            Link::construct('Docker', new Url('https://docs.docker.com/engine/install/ubuntu/'), 'Docker container software'),
            Link::construct('docker-compose', new Url('https://docs.docker.com/compose/install/'), 'Helper script for docker'),
            Link::construct('Git client', new Url('https://git-scm.com/'), 'Git'),
        ];
    }

    static function getBuildInstructions():array {

        return [
            'Build instructions' => [
                [
                    'command' => "sudo apt update",
                    'comment' => "Update software index"
                ],
                [
                    'command' => "sudo apt upgrade",
                    'comment' => "Upgrade system"
                ],
                [
                    'command' => "sudo service apache2 stop",
                    'comment' => "Stop webserver that was already running"
                ],
                [
                    'command' => "sudo service mysql stop",
                    'comment' => "Stop database server that was already running"
                ],
                [
                    'command' => "sudo systemctl disable apache2",
                    'comment' => "Stop apche from starting again at boot"
                ],
                [
                    'command' => "sudo systemctl disable mysql",
                    'comment' => "Stop mysql from starting again at boot"
                ],
            ]
        ];
    }

    function inMenu(): bool
    {
        return true;
    }
}

