<?php


namespace Test\MediatorMode\MediatorConcrete;

use Test\MediatorMode\MediatorBase\Mediator;
use Test\MediatorMode\UserBase\User;

class ChatMediator extends Mediator
{
    public $users = [];

    public function attach(User $user)
    {
        if(!in_array($user, $this->users)){
            $this->users[] = $user;
        }
    }

    public function detach(User $user)
    {
        foreach ($this->users as $key => $u){
            if($u == $user){
                unset($this->users[$key]);
            }
        }
    }

    public function send($message, User $user)
    {
        foreach ($this->users as $u){
            if($u == $user){
                continue;
            }
            $u->notify($message);
        }
    }
}