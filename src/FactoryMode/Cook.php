<?php
namespace Test\FactoryMode;

class Cook extends Base\People
{
    public function work()
    {
        echo '厨师的工作是做美味的菜肴';
    }
}