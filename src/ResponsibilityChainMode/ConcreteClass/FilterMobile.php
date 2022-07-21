<?php


namespace Test\ResponsibilityChainMode\ConcreteClass;

use Test\ResponsibilityChainMode\Base\FilterChain;

class FilterMobile  extends FilterChain
{
    protected $warningWords = ['打架', '丰胸', '偷税'];

    public function filter($message)
    {
        $message = preg_replace("/(1[3|5|7|8]\d)\d{4}(\d{4})/i", "$1****$2", $message);

        if($this->next){
            return $this->next->filter($message);
        }else{
            return $message;
        }
    }
}