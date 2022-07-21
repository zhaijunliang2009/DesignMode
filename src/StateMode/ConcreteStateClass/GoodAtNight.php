<?php
/**
 * 夜里工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\Midnight;

class GoodAtNight implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 23){
            echo 'Good at night';
        }else{
            $w->setState(new Midnight());
            return $w->writeCode();
        }
    }
}