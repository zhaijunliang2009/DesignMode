<?php

namespace Test\CombinationMode\MakeClass;


class Arm
{
    private $soldier = [];
    private $namespace = 'Test\\CombinationMode\\SingleClass\\';

    // 添加作战兵种
    public function add($soldierType)
    {
        $soldierTypePrefix = $this->namespace . $soldierType;
        // 获取对应的兵种对象
        $soldier = new $soldierTypePrefix();

        //保存进数组利用数组的键记录兵种 便于删除
        $this->soldier[$soldierType] = $soldier;
    }

    public function delete($soldierType)
    {
        if (isset($this->soldier[$soldierType])) {
            unset($this->soldier[$soldierType]);
        }
    }

    public function show()
    {
        $zhandouli = 0;
        foreach ($this->soldier as $item) {
            $zhandouli += $item->fire();
        }

        echo "军队的战斗力: " . $zhandouli . '<br>';
    }
}