<?php


namespace Test\CommandMode\Invoker;

use Test\CommandMode\InterfaceBase\Command;

class Invoker
{
    private $_command;

    public function __construct(Command $command)
    {
        $this->_command = $command;
    }

    public function action()
    {
        $this->_command->execute();
    }

}