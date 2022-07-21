<?php

namespace Test\AdapterMode\BaseMessage;

class BaiduYunMessage
{
    public function transmission_msg()
    {
        echo "百度云发送短信！" . PHP_EOL;
    }

    public function transmission_push()
    {
        echo "百度云发送推送！" . PHP_EOL;
    }
}