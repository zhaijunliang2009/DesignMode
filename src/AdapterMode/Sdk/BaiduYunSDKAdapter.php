<?php

namespace Test\AdapterMode\Sdk;

use Test\AdapterMode\BaseMessage\Message;

class BaiduYunSDKAdapter extends Message
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        $this->message->transmission_msg();
    }

    public function push()
    {
        $this->message->transmission_push();
    }
}