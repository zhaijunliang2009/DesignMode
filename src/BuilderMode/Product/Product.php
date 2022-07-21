<?php

namespace Test\BuilderMode\Product;

class Product
{
    public $_type = null;
    public $_price = null;
    public $_color = null;

    public function setType($type)
    {
        echo '设置产品类型';
        $this->_type = $type;
    }

    public function setPrice($price)
    {
        echo '设置产品价格';
        $this->_price = $price;
    }

    public function setColor($color)
    {
        echo '设置产品颜色';
        $this->_color = $color;
    }

}