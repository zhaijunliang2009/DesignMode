<?php

namespace Test\CombinationMode\SingleClass;

use Test\CombinationMode\InterfaceBase\Soldier;

class Paobing implements Soldier
{
    public function fire()
    {
        return 8;
    }
}