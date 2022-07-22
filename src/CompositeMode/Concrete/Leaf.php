<?php


namespace Test\CompositeMode\Concrete;

use Test\CompositeMode\ComponentInterface\Component;

class Leaf implements Component
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function operation()
    {
        echo $this->name;
    }

    public function getComposite()
    {
        return null;
    }
}