<?php


namespace Test\VisitorMode\VisitorConcrete;

use Test\VisitorMode\BaseInterface\ComputerPart;
use Test\VisitorMode\BaseInterface\ComputerPartVisitor;

class ExpertVisitor implements ComputerPartVisitor
{
    public function visit(ComputerPart $part)
    {
        echo 'expert is visiting ', get_class($part), PHP_EOL;
    }
}