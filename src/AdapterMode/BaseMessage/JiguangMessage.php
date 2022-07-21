<?php

namespace Test\AdapterMode\BaseMessage;

class JiguangMessage
{
    public function send_out_msg()
    {
        echo "极光发送短信！" . PHP_EOL;
    }

    public function push_msg()
    {
        echo "极光发送推送！" . PHP_EOL;
    }
}