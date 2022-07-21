<?php

namespace Test\AdapterMode\Sdk;

use Test\AdapterMode\BaseMessage\Message;

class JiguangSDKAdapter extends Message
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        $this->message->send_out_msg();
    }

    public function push()
    {
        $this->message->push_msg();
    }
}