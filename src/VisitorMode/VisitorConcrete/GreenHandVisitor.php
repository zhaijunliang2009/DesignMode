<?php


namespace Test\VisitorMode\VisitorConcrete;

use Test\VisitorMode\BaseInterface\ComputerPart;
use Test\VisitorMode\BaseInterface\ComputerPartVisitor;

class GreenHandVisitor implements ComputerPartVisitor
{
    public function visit(ComputerPart $part)
    {
        echo 'green hand is visiting ', get_class($part), PHP_EOL;
    }
}