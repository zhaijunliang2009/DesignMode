<?php


namespace Test\StateMode\BaseInterface;

use Test\StateMode\Context\Work;

interface IState
{
    public function writeCode(Work $w);
}