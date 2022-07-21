<?php
namespace Test\ObserverMode;

class CTest extends Base\Observer
{
    protected $observerName = 'C';

    public function onListen($sender, $args)
    {
        var_dump($sender);
        echo '<br>';
        var_dump($args);
        echo '<br>';
    }
}