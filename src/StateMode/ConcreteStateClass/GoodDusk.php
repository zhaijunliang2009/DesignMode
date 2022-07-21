<?php
/**
 * 傍晚工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodNight;

class GoodDusk implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 19){
            echo 'Good dusk';
        }else{
            $w->setState(new GoodNight());
            return $w->writeCode();
        }
    }
}