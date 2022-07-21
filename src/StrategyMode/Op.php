<?php
namespace Test\StrategyMode;

class Op
{
    protected $opClass = null;
    protected $prefix = 'Test\\StrategyMode\\StrategyType\\';

    public function __construct($opType)
    {
        $this->opClass = $this->prefix . 'Math' . $opType;
    }

    public function getResult($num1, $num2)
    {
        $class = new $this->opClass;
        return $class->calculation($num1, $num2);
    }
}