<?php
namespace Test\DecoratorMode\Concrete;
use Test\DecoratorMode\InterfaceBase\Worker;

class ShuiGuan implements Worker
{
    public function doSomeWork()
    {
        echo '修水管';
    }
}