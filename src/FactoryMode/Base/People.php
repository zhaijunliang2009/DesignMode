<?php

namespace Test\FactoryMode\Base;

abstract class People
{
    static protected $namespace = 'Test\\FactoryMode\\';

    abstract public function work();

    // 定义工厂方法，并使其不可继承
    static final function createInstance($job)
    {
        $job = ucfirst($job);

        $job = static::$namespace . $job;

        return new $job();
    }
}