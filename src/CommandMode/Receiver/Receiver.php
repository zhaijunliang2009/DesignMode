<?php


namespace Test\CommandMode\Receiver;


class Receiver
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function action()
    {
        echo 'receiver some cmd:'.$this->_name;
    }
}