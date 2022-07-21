<?php

namespace Test\DecoratorMode\DecoratorClass;

use Test\DecoratorMode\InterfaceBase\Worker;

class AWorker implements Worker
{
    public $worker;

    public function __construct($worker)
    {
        $this->worker = $worker;
    }

    public function doSomeWork()
    {
        echo '您好';
        $this->worker->doSomeWork();
    }
}