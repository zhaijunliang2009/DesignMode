<?php
/**
 * 中午工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodAfternoon;

class GoodNoon implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 14){
            echo 'Good noon';
        }else{
            $w->setState(new GoodAfternoon());
            return $w->writeCode();
        }
    }
}