<?php


namespace Test\MediatorMode\UserConcrete;

use Test\MediatorMode\UserBase\User;

class ChatUser extends User
{
    public function send($message)
    {
        $this->mediator->send($message . '(' . $this->name . '发送)', $this);
    }

    public function notify($message)
    {
        echo $this->name . '收到消息：' . $message, PHP_EOL;
    }
}