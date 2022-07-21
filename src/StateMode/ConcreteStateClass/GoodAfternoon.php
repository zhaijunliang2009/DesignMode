<?php
/**
 * 下午工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodDusk;

class GoodAfternoon implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 17){
            echo 'Good afternoon';
        }else{
            $w->setState(new GoodDusk());
            return $w->writeCode();
        }
    }
}