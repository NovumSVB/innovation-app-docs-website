<?php


namespace InnovationApp\Classes;


use Hurah\Types\Type\Url;
use InnovationApp\Contracts\ICrumble;
use InnovationApp\Contracts\IModuleConfig;

class Crumbles implements \Iterator
{
    private $position = 0;
    private $array = [];

    /**
     * Crumbles constructor.
     * @param ICrumble[] $aCrumbles
     */
    public function __construct(array $aCrumbles) {
        $this->position = 0;

        foreach ($aCrumbles as $oCrumble)
        {
            $this->array[] = new Crumble($oCrumble->getMenuLabel(), new Url($oCrumble->getBaseUrl()));
        }
    }

    public function add(Crumble $oCrumle) : void {
        $this->array[] = $oCrumle;
    }

    public function isLast():bool {
        return count($this->array) -1  === $this->position;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() : ICrumble {
        $oCrumble = $this->array[$this->position];
        if($oCrumble instanceof Crumble)
        {
            $oCrumble->setIsLast($this->isLast());
        }
        return $this->array[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->array[$this->position]);
    }
}