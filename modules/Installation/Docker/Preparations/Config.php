<?php
namespace InnovationApp\modules\Installation\Docker\Preparations;

use Core\DataType\Link;
use Core\DataType\Url;
use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Config implements IModuleConfig, ICrumble
{
    function getMenuLabel(): string
    {
        return 'Preparations';
    }
    function getBaseUrl(): string
    {
        return '/installation/docker/preparations';
    }

    static function getEnvSetupInstructions():array {

        return [
            'Prepare system' => [
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
            ],
            'Install Docker' => [
                [
                    'command' => "sudo adduser innovation",
                    'comment' => "Create a new user that will be used to host the code from. Answer questions"
                ],
                [
                    'command' => "exit",
                    'comment' => "Log off to create ssh key for easy login"
                ],
                [
                    'command' => "ssh-copy-id innovation@<our-server>",
                    'comment' => "Copy own ssh key to the server for easy login at later moments"
                ],
                [
                    'command' => "ssh innovation@<our-server>",
                    'comment' => "Log back in"
                ],
                [
                    'command' => "sudo apt install git",
                    "comment" => "Install git client"
                ],
                [
                    'command' => "sudo apt-get install apt-transport-https ca-certificates curl gnupg-agent software-properties-common",
                    "comment" => "Install some Docker dependencies, for more info see here: <a href=\"https://docs.docker.com/engine/install/ubuntu/\">Docker installation instructions</a>",
                ],
                [
                    'command' => "sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -",
                    "comment" => "Add Docker’s official GPG key"
                ],
                [
                    'command' => "sudo apt-key fingerprint 0EBFCD88",
                    "comment" => "Verify that you now have the key with the fingerprint"
                ],
                [
                    'command' => "sudo add-apt-repository \"deb [arch=amd64] https://download.docker.com/linux/ubuntu \$(lsb_release -cs) \stable",
                    "comment" => "Add the repository to your repositories list"
                ],
                [
                    'command' => "sudo apt update",
                    'comment' => "Update software index"
                ],
                [
                    "command" => "sudo apt-get install docker-ce docker-ce-cli containerd.io",
                    "comment" => "Finally install Docker"
                ],
            ],
            'Install docker-compose' => [
                [
                    "command" => "Download the Latest Docker Compose Version and store it in /usr/local/bin",
                    "comment" => "sudo curl -L \"https://github.com/docker/compose/releases/download/1.24.0/docker-compose-$(uname -s)-$(uname -m)\" -o /usr/local/bin/docker-compose"
                ],
                [
                    "command" => "Make the script executable",
                    "comment" => "sudo chmod +x /usr/local/bin/docker-compose"
                ],
                [
                    "command" => "docker–compose –version",
                    "comment" => "Verify the installation, if things went well you should see the docker-compose version after running this command."
                ]
            ],
            'Permissions' => [

                [
                    'command' => "sudo usermod -aG docker \$USER",
                    "comment" => "If you have created a new user you may need to add that user to the Docker group in order for it to be able to start and run containers"
                ]

            ]
        ];
    }


    function inMenu(): bool
    {
        return true;
    }
}

