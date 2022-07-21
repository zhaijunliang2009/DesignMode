<?php

namespace Test\FactoryMode\Factory;

class Factory
{
    static protected $namespace = 'Test\\FactoryMode\\';

    // 此方法根据参数创建需要的对象
    static function createInstance($job)
    {
        $job = ucfirst($job);
        $job = static::$namespace . $job;
        return new $job();
    }
}