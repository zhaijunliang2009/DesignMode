<?php


namespace Test\BridgeMode\ConcreteBridge;

use Test\BridgeMode\BaseBridge\Abstraction;
use Test\BridgeMode\BaseBridged\Implementor;

class RefinedAbstraction extends Abstraction
{
    public function __construct(Implementor $imp)
    {
        $this->imp = $imp;
    }

    public function operation()
    {
        $this->imp->operationImp();
    }
}