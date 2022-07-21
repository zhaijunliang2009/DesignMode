<?php


namespace Test\MediatorMode\UserBase;

use Test\MediatorMode\MediatorBase\Mediator;

abstract class User
{
    public $mediator;
    public $name;
    public function __construct(Mediator $mediator, $name)
    {
        $this->mediator = $mediator;
        $this->name = $name;
    }
}