<?php


namespace Test\BridgeMode\BaseBridge;


abstract class Abstraction
{
    protected $imp; // 对实现化对象的引用

    public function operation()
    {
        $this->imp->operationImp();
    }
}