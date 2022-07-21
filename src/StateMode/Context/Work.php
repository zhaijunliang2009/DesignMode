<?php

namespace Test\StateMode\Context;

use Test\StateMode\ConcreteStateClass\EarlyMorning;
use Test\StateMode\BaseInterface\IState;

class Work
{
    private $current;
    public $hour;

    public function __construct()
    {
        $this->current = new EarlyMorning();
    }

    // 设置状态
    public function setState(IState $s)
    {
        $this->current = $s;
    }

    public function writeCode()
    {
        return $this->current->writeCode($this);
    }
}