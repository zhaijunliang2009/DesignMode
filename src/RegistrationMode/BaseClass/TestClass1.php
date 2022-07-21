<?php


namespace Test\RegistrationMode\BaseClass;


class TestClass1
{
    protected $test;
    public function __construct($test)
    {
        $this->test = $test;
    }

    public function get()
    {
        return $this->test;
    }
}