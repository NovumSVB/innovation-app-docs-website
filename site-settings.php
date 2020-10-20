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
            ]
        ],
        'urls' => [
            'demo_project_git_repo' => 'https://gitlab.com/NovumGit/innovation-app-demo/'
        ],
/*
        'schemas' => [
            new InnovationApp\Modules\Resources\Schemas\ApiInfo\Info(),
            new InnovationApp\Modules\Resources\Schemas\SchemaPlusCrud\Info(),
            new InnovationApp\Modules\Resources\Schemas\SchemaXsd\Info()
        ]
*/
    ];
}
