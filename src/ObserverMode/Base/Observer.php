<?php

namespace Test\ObserverMode\Base;

use Test\ObserverMode\InterfaceBase\InterfaceObserver;
abstract class Observer implements InterfaceObserver
{
    protected $observerName;
    public function getObserverName()
    {
        return $this->observerName;
    }

    public function onListen($sender, $args)
    {
        // TODO: Implement onListen() method.
    }
}