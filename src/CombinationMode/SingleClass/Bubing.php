<?php

namespace Test\CombinationMode\SingleClass;

use Test\CombinationMode\InterfaceBase\Soldier;

class Bubing implements Soldier
{
    public function fire()
    {
        return 5;
    }
}