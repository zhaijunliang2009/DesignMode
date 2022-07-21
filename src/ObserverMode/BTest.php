<?php
namespace Test\ObserverMode;

class BTest extends Base\Observer
{
    protected $observerName = 'B';

    public function onListen($sender, $args)
    {
        var_dump($sender);
        echo '<br>';
        var_dump($args);
        echo '<br>';
    }
}