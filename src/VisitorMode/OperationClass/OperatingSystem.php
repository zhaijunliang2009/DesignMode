<?php

namespace Test\VisitorMode\OperationClass;

use Test\VisitorMode\BaseInterface\ComputerPart;
use Test\VisitorMode\BaseInterface\ComputerPartVisitor;

class OperatingSystem implements ComputerPart
{
    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visit($this);
    }
}