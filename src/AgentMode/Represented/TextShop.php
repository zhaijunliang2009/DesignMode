<?php

namespace Test\AgentMode\Represented;

use Test\AgentMode\AgentObject\Printer;

class TextShop
{
    private $printer;

    public function __construct(Printer $printer)
    {
        $this->printer = $printer;
    }

    public function sellPaper()
    {
        echo 'give you some paper <br>';
    }

    // 将代理对象有的功能交给代理对象处理
    public function __call($method, $arguments)
    {
        if(method_exists($this->printer, $method)){
            $this->printer->$method($arguments);
        }
    }
}