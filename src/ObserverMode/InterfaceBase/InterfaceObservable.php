<?php
namespace Test\ObserverMode\InterfaceBase;

/**
 * Interface InterfaceObservable
 * 可被观察者接口
 */
interface InterfaceObservable{
    function addObserver($observer);
    function removeObserver($observerName);
}