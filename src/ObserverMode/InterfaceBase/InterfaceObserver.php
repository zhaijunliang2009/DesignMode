<?php
namespace Test\ObserverMode\InterfaceBase;

/**
 * Interface InterfaceObserver
 * 观察者接口
 */
interface InterfaceObserver{
    function onListen($sender, $args);
    function getObserverName();
}