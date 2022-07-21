<?php


namespace Test\MediatorMode\MediatorBase;

use Test\MediatorMode\UserBase\User;

abstract class Mediator
{
    abstract public function send($message, User $user);
}