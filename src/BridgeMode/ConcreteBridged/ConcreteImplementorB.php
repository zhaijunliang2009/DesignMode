<?php


namespace Test\BridgeMode\ConcreteBridged;

use Test\BridgeMode\BaseBridged\Implementor;

class ConcreteImplementorB extends Implementor
{
    public function operationImp()
    {
        echo 'B';
    }
}