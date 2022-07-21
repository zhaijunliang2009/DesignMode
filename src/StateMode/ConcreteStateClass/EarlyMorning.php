<?php
/**
 * 早晨工作状态
 */

namespace Test\StateMode\ConcreteStateClass;

use Test\StateMode\BaseInterface\IState;
use Test\StateMode\Context\Work;
use Test\StateMode\ConcreteStateClass\GoodMorning;

class EarlyMorning implements IState
{

    public function writeCode(Work $w)
    {
        if($w->hour < 6){
            echo 'Good Early morning';
        }else{
            $w->setState(new GoodMorning());
            return $w->writeCode(); //注意：这里必须都要return返回，否则调用客户端代码的时候无法赋值给$call。
        }
    }
}