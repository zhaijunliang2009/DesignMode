<?php


namespace Test\RegistrationMode\Register;


class Register
{
    protected static $objects;
    public function set($alias, $object)
    {
        if (isset(static::$objects[$alias])){
            throw new \Exception('该类已注册');
        }

        self::$objects[$alias] = $object;
    }

    public function get($alias = '')
    {
        if(!empty($alias)){
            return self::$objects[$alias];
        }

        return self::$objects;
    }

    public function __unset($alias)
    {
        unset(self::$objects[$alias]);// 移除某个注册到树上的对象。
    }
}