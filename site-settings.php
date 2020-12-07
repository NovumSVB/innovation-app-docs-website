<?php
function getSiteSettings()
{
    return [
        'page_title_html' => '<span class="text-highlight">Innovation</span><span class="text-bold">App</span>',
        'system_name' => 'Innovation App',
        'module_dir' => 'Modules',
        'config_dir' => 'novum.docs',
        'namespace' => 'InnovationApp',
        'protocol' => isset($_SERVER['IS_DEVEL']) ? 'http' : 'https',
        'live_domain' => 'innovation.app.novum.nu',
        'dev_domain' => 'innovation.app.novum.nuidev.nl',
        'repositories' => [
            'core' => [
                'url' => 'https://gitlab.com/NovumGit/innovation-app-core',
                'title' => 'Core system'
            ],
            'demo' => [
                'url' => 'https://gitlab.com/NovumGit/innovation-app-demo',
                'title' => 'Demo files'
            ],
            'installer' => [
                'url' => 'https://github.com/antonboutkam/hurah-installer',
                'title' => 'Installer'
            ],
            'docker' => [
                'url' => 'https://gitlab.com/NovumGit/innovation-app-util-docker',
                'title' => 'docker containers'
            ]
        ],
        'urls' => [
            'demo_project_git_repo' => 'https://gitlab.com/NovumGit/innovation-app-demo/',
            'docker_util_zip_url' => 'https://gitlab.com/NovumGit/innovation-app-util-docker/-/archive/master/innovation-app-util-docker-master.zip'
        ],
/*
        'schemas' => [
            new InnovationApp\modules\Resources\Schemas\ApiInfo\Info(),
            new InnovationApp\modules\Resources\Schemas\SchemaPlusCrud\Info(),
            new InnovationApp\modules\Resources\Schemas\SchemaXsd\Info()
        ]
*/
    ];
}
