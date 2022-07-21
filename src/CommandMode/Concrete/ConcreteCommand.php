<?php


namespace Test\CommandMode\Concrete;

use Test\CommandMode\InterfaceBase\Command;
use Test\CommandMode\Receiver\Receiver;

class ConcreteCommand implements Command
{
    private $_receiver;

    public function __construct(Receiver $receiver)
    {
        $this->_receiver = $receiver;
    }

    public function execute()
    {
        $this->_receiver->action();
    }
}