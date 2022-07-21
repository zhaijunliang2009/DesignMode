<?php
/**
 * 上午工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodNoon;

class GoodForenoon implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 12){
            echo 'Good forenoon';
        }else{
            $w->setState(new GoodNoon());
            return $w->writeCode();
        }
    }
}