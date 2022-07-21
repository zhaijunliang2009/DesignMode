<?php
namespace Test\StrategyMode\StrategyType;
use Test\StrategyMode\InterfaceBase\MathOp;

class MathSub implements MathOp
{
    public function calculation($num1, $num2)
    {
        return $num1 - $num2;
    }
}