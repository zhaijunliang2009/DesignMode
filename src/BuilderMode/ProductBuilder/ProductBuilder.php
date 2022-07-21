<?php

namespace Test\BuilderMode\ProductBuilder;

use Test\BuilderMode\Product\Product;

class ProductBuilder
{
    public $_config = null;
    public $_object = null;

    public function __construct($config)
    {
        $this->_config = $config;
        $this->_object = new Product();
    }

    public function build()
    {
        echo '<br /> 使用建造者模式;<br/>';
        $this->_object->setType($this->_config['type']);
        $this->_object->setPrice($this->_config['price']);
        $this->_object->setColor($this->_config['color']);
    }

    public function getProduct()
    {
        return $this->_object;
    }
}