<?php
/**
 * 晚上工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodAtNight;

class GoodNight implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 22){
            echo 'Good night';
        }else{
            $w->setState(new GoodAtNight());
            return $w->writeCode();
        }
    }
}