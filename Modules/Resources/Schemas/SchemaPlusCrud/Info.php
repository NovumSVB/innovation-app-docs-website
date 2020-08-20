<?php
namespace InnovationApp\Modules\Resources\Schemas\SchemaPlusCrud;

use InnovationApp\Contracts\ISchemaInfo;

class Info implements ISchemaInfo
{
    function getFileName(): string
    {
        return 'schema-plus-crud.xsd';
    }
    function getBaseUrl(): string
    {
        return '/resources/schemas/schema-plus-crud';
    }
    function inMenu(): bool
    {
        return true;
    }

    function getSynopsis(): string
    {
        return 'This schema is used to model your application against.';
    }

    function getDescription(): string
    {
        return 'In this system an application is split up into modules and models. A model represents an entity or a 
        collection entity\'s of some sort of data. Usually this maps directly to tables in the database but a model can also be virtual.
        You can define the application structure in an XML file or use the ERD editor to model it and generate the schema for you'  ;
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

