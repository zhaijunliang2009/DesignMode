<?php
/**
 * 半夜工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;

class Midnight implements IState
{

    public function writeCode(Work $w)
    {
        echo 'midnight';
    }
}