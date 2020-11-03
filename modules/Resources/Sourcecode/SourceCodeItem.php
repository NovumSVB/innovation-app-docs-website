<?php
namespace InnovationApp\modules\Resources\Sourcecode;

class SourceCodeItem
{
    private string $title;
    private string $repoUrl;
    private string $synopsis;
    private string $description;

    function __construct(string $title, string $repoUrl, string $synopsis, string $description)
    {
        $this->title = $title;
        $this->repoUrl = $repoUrl;
        $this->synopsis = $synopsis;
        $this->description = $description;

    }

}
