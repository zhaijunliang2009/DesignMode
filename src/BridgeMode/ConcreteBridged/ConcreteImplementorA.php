<?php


namespace Test\BridgeMode\ConcreteBridged;

use Test\BridgeMode\BaseBridged\Implementor;

class ConcreteImplementorA extends Implementor
{
    public function operationImp()
    {
        echo 'A';
    }
}