<?php


namespace Test\CompositeMode\Concrete;

use Test\CompositeMode\ComponentInterface\Component;

class Composite implements Component
{
    private $composites;

    public function __construct()
    {
        $this->composites = [];
    }

    public function getComposite()
    {
        return $this;
    }

    public function operation()
    {
        foreach ($this->composites as $composite){
            $composite->operation();
        }
    }

    public function add(Component $component)
    {
        if(!in_array($component, $this->composites)){
            $this->composites[] = $component;
        }
    }

    public function remove(Component $component)
    {
        foreach ($this->composites as $key => $row) {
            if($component == $row){
                unset($this->composites[$key]);
                return true;
            }
        }

        return false;
    }

    // 聚集管理方法 返回所有的子对象
    public function getChild()
    {
        return $this->composites;
    }
}