<?php


namespace Test\ResponsibilityChainMode\ConcreteClass;

use Test\ResponsibilityChainMode\Base\FilterChain;

class FilterStrict extends FilterChain
{
    protected $strictWords = [
        '枪x',
        '弹x',
        '毒x',
    ];

    public function filter($message)
    {
        foreach ($this->strictWords as $word){
            if(strpos($message, $word) !== false){
                throw new \Exception('该信息包含敏感信息！');
            }
        }

        if($this->next){
            return $this->next->filter($message);
        }else{
            return $message;
        }
    }
}