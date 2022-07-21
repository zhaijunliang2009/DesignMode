<?php
namespace Test\DecoratorMode\Concrete;
use Test\DecoratorMode\InterfaceBase\Worker;

class MuGong implements Worker
{
    public function doSomeWork()
    {
        echo '修门窗';
    }
}