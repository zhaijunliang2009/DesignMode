<?php


namespace Test\VisitorMode\BaseInterface;

use Test\VisitorMode\BaseInterface\ComputerPartVisitor;

interface ComputerPart
{
    // 定义一个接受访问操作(accept())，它以一个访问者(Visitor)作为参数。
    public function accept(ComputerPartVisitor $visitor);
}