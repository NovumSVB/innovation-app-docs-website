<?php
namespace InnovationApp\Classes;

use InnovationApp\modules\Api as Api;
use InnovationApp\modules\Api\Documentation as ApiDocumentation;
use InnovationApp\modules\Introduction as Intro;
use InnovationApp\modules\Installation as Install;
use InnovationApp\modules\Components as Components;
use InnovationApp\modules\Resources as Resources;
use InnovationApp\modules\Resources\Schemas as Schemas;
use InnovationApp\modules\Resources\Sourcecode as Sourcecode;
use InnovationApp\modules\Home as Home;
use InnovationApp\modules\Demo as Demo;

class PageManager
{
    static function getActive(string $sUrl, array $aItem = null):?Page
    {
        $aAllPages = self::getAll();

        foreach ($aAllPages as $oPage)
        {
            if(isset($oPage) && $oPage instanceof Page)
            {
                if(strpos($oPage->getUrl(), '/\/') === 0)
                {
                    if(preg_match($oPage->getUrl(),  $sUrl))
                    {
                        return $oPage;

                    }

                } else if($oPage->getUrl() === $sUrl)
                {
                    return $oPage;
                }
            }
        }
        return null;
    }
    static function getByTag(string $sName) : Page
    {
        return self::getAll()[$sName];
    }
    static function getAll()
    {
        return [
            'Home' => new Page(Home\Controller::class, Home\Config::class),
            'Intro' => new Page(Intro\Controller::class, Intro\Config::class),
            'Installation' => new Page(Install\Controller::class, Install\Config::class),
                'Docker' => new Page(Install\Docker\Controller::class, Install\Docker\Config::class),
                'Composer' => new Page(Install\Composer\Controller::class, Install\Composer\Config::class),
                'Requirements' => new Page(Install\Requirements\Controller::class, Install\Requirements\Config::class),
            'Demo' => new Page(Demo\Controller::class, Demo\Config::class),
                'DemoDetail' => new Page(Demo\Detail\Controller::class, Demo\Detail\Config::class),
                'FullDocker' => new Page(Demo\Detail\Controller::class, Demo\Detail\Config::class),
            'Components' => new Page(Components\Controller::class, Components\Config::class),
                'Admin' => new Page(Components\Admin\Controller::class, Components\Admin\Config::class),
                'Modeller' => new Page(Components\Modeller\Controller::class, Components\Modeller\Config::class),
            'Resources' => new Page(Resources\Controller::class, Resources\Config::class),
                'Schemas' => new Page(Schemas\Controller::class, Schemas\Config::class),
                'Sourcecode' => new Page(Sourcecode\Controller::class, Sourcecode\Config::class),

            'Api' => new Page(Api\Controller::class, Api\Config::class),
                'ApiDocumentation' => new Page(ApiDocumentation\Controller::class, ApiDocumentation\Config::class),
        ];
    }
    /**
     * @return []
     */
    static function getMenu():array
    {
        $aPages = self::getAll();
        return [
            'Home' => [
                'page' => $aPages['Home'],
            ],
            'Intro' => [
                'page' => $aPages['Intro'],
            ],
            'Installation' => [
                'page' => $aPages['Installation'],
                'children' => [
                    'Requirements' => [
                        'page' => $aPages['Requirements']
                    ],
                    'Composer' => [
                        'page' => $aPages['Composer']
                    ],
                    'Docker' => [
                        'page' => $aPages['Docker']
                    ]
                ]
            ],
            'Demo' => [
                'page' => $aPages['Demo']
            ],
            'Components' => [
                'page' => $aPages['Components'],
                'children' => [
                    'Admin' => [
                        'page' => $aPages['Admin']
                    ],
                    'Modeller' => [
                        'page' => $aPages['Modeller']
                    ]
                ]
            ],
            'Resources' => [
                'page' => $aPages['Resources'],
                'children' => [
                    'Schemas' => [
                        'page' => $aPages['Schemas']
                    ],
                    'Sourcecode' => [
                        'page' => $aPages['Sourcecode']
                    ]
                ]
            ],
            'Api' => [
                'page' => $aPages['Api'],
                'children' => [
                    'Schemas' => [
                        'page' => $aPages['ApiDocumentation']
                    ]
                ]
            ]
        ];
    }
}
