<?php
namespace InnovationApp\Modules\Resources\Schemas\ApiInfo;

use InnovationApp\Contracts\ISchemaInfo;

class Info implements ISchemaInfo
{
    function getFileName(): string
    {
        return 'api-info.xsd';
    }
    function getBaseUrl(): string
    {
        return '/resources/schemas/api-info';
    }
    function inMenu(): bool
    {
        return true;
    }

    function getSynopsis(): string
    {
        return 'This schema is used to validate api-info.xml files agains.';
    }

    function getDescription(): string
    {
        return 'The api-info.xml file contains information that is required to set-up access to the NlX cloud. '.
            'This includes a description about what the API does, where to get support, who to contact in case there are'.
            ' questions etc. The URL is versioned so whenever breaking changes occur the URL should also change';
    }

    function getSchemaUrl(): string
    {
        return 'https://novumgit.gitlab.io/innovation-app-schema-xsd/v1/schema-plus-crud.xsd';
    }

    function getRepoUrl(): string
    {
        return 'https://gitlab.com/NovumGit/innovation-app-schema-xsd';
    }
}

