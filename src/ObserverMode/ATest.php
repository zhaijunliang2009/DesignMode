<?php
namespace Test\ObserverMode;

class ATest extends Base\Observable
{
    public function addListen($listener)
    {
        foreach ($this->observers as $observer) {
            $observer->onListen($this, $listener);
        }
    }
}