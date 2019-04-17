<?php

class ArrayList
{
    public $arrayList=[];

    public function __construct()
    {
        return $this->arrayList;
    }

    public function add($item)
    {
        array_push($this->arrayList, $item);
    }

    public function remove($item)
    {
        unset($this->arrayList[$item]);
        $this->arrayList = array_values($this->arrayList);
        return $this->arrayList;
    }
    public function get($index)
    {
        if ($index >= 0 && $index < count($this->arrayList)) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }

    }
}

