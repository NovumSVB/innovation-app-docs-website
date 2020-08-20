<?php
namespace InnovationApp\Modules\Resources\Schemas\SchemaXsd;

use InnovationApp\Contracts\ISchemaInfo;

class Info implements ISchemaInfo
{
    function getFileName(): string
    {
        return 'schema.xsd';
    }
    function getBaseUrl(): string
    {
        return '/resources/schemas/schema';
    }
    function inMenu(): bool
    {
        return true;
    }

    function getSynopsis(): string
    {
        return 'This schema can be referenced when code generation is not desired.';
    }

    function getDescription(): string
    {
        return 'Sometimes you will require some models to be just there in the backend without any UI or availability ' .
                'in the API. This is, for instance, used in the a whole bunch of core classes that have manually written code.' .
                'you can create a separate schema file for this and include it in the main schema file using the external-schema tag';
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

