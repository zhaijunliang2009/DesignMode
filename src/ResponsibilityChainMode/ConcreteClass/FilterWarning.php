<?php


namespace Test\ResponsibilityChainMode\ConcreteClass;

use Test\ResponsibilityChainMode\Base\FilterChain;

class FilterWarning extends FilterChain
{
    protected $warningWords = ['打架', '丰胸', '偷税'];

    public function filter($message)
    {
        $message = str_replace($this->warningWords, '*', $message);

        if($this->next){
            return $this->next->filter($message);
        }else{
            return $message;
        }
    }
}