<?php


namespace Test\RegistrationMode\BaseClass;


class TestClass2
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