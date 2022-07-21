<?php


namespace Test\CommandMode\Invoker;


class Invoker
{
    private $_command;

    public function __construct($command)
    {
        $this->_command = $command;
    }

    public function action()
    {
        $this->_command->execute();
    }

}