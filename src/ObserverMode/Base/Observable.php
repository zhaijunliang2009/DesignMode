<?php


namespace Test\ObserverMode\Base;

use Test\ObserverMode\InterfaceBase\InterfaceObservable;
use Test\ObserverMode\InterfaceBase\InterfaceObserver;

abstract class Observable implements InterfaceObservable
{
    protected $observers = [];
    public function addObserver($observer)
    {
        if($observer instanceof InterfaceObserver && !in_array($observer, $this->observers)){
            $this->observers[] = $observer;
        }
    }

    public function removeObserver($observerName)
    {
        foreach ($this->observers as $index => $observer) {
            if($observer->getObserverName == $observerName){
                array_slice($this->observers, $index, 1);
                return;
            }
        }
    }

}