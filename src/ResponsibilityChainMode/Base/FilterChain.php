<?php


namespace Test\ResponsibilityChainMode\Base;


abstract class FilterChain
{
    protected $next;

    public function setNext($next)
    {
        $this->next = $next;
    }

    abstract public function filter($message);

}