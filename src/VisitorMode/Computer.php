<?php

namespace Test\VisitorMode;

use Test\VisitorMode\BaseInterface\ComputerPart;
use Test\VisitorMode\BaseInterface\ComputerPartVisitor;

class Computer implements ComputerPart
{
    /*
	ObjectStructure 结构对象角色，这是使用访问者模式必备的角色。
	它具备以下特性：能枚举它的元素；可以提供一个高层接口以允许访问者访问它的元素；
	如有需要，可以设计成一个复合对象或者一个聚集（如一个列表或无序集合）。
	*/
    private $parts = [];

    public function attach(ComputerPart $part)
    {
        $this->parts[] = $part;
    }

    public function detach(ComputerPart $part)
    {
        $tmpArr=[];
        foreach ($this->parts as $partInArr) {
            if($partInArr != $part){
                $tmpArr[] = $partInArr;
            }
        }

        $this->parts=$tmpArr;
    }

    public function accept(ComputerPartVisitor $visitor)
    {
        foreach($this->parts as $part){
            $part->accept($visitor);
        }
    }

}