<?php

namespace Test\AdapterMode\BaseMessage;

class Message
{
    public function send()
    {
        echo "阿里云发送短信！" . PHP_EOL;
    }

    public function push()
    {
        echo "阿里云发送推送！" . PHP_EOL;
    }
}