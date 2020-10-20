<?php
namespace InnovationApp\Classes\Vo;

class DataSource
{
    private int $id;
    private string $titel;
    private string $code;
    private string $url;
    private string $documentation;
    private string $description;
    private string $packagist_url;
    private string $docker_image;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->titel;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getDocumentation(): string
    {
        return $this->documentation;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPackagistUrl(): string
    {
        return $this->packagist_url;
    }

    /**
     * @return string
     */
    public function getDockerImage(): string
    {
        return $this->docker_image;
    }

    function __construct(array $aData)
    {
        if(is_array($aData))
        {
            foreach($aData as $sProperty => $sValue)
            {
                if(property_exists($this, $sProperty))
                {
                    $this->{$sProperty} = $sValue;
                }
            }
        }
    }
}
