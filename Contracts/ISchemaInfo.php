<?php
namespace InnovationApp\Contracts;

interface ISchemaInfo
{
    function getFileName():string;
    function getSynopsis():string;
    function getDescription():string;
    function getSchemaUrl():string;
    function getRepoUrl():string;
}
