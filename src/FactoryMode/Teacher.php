<?php
namespace Test\FactoryMode;

class Teacher extends Base\People
{
    public function work()
    {
        echo '老师的工作是教书育人';
    }
}