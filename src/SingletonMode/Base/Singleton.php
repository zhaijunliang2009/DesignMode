<?php

namespace Test\SingletonMode\Base;

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
        self::$instance = mysqli_connect('localhost', 'root', 'root');
    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    // 私有的克隆方法，防止在类外 clone 对象
    private function __clone()
    {

    }

    // 防止反序列化后创建对象
    private function __wakeup()
    {
        trigger_error('Unserialized is not allowed !');
    }
}