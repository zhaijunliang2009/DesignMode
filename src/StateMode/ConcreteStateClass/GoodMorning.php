<?php
/**
 * 早上工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodForenoon;

class GoodMorning implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 9){
            echo 'Good morning';
        }else{
            $w->setState(new GoodForenoon());
            return $w->writeCode();
        }
    }
}