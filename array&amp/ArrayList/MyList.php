<?php
class MyList
{
    public $size;
    public $arrayList = [];
    public function ArrayList($arr = [])
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }

    public function insert($index, $obj)
    {
        if ($this->isInteger($index)) {
            array_splice($this->arrayList, $index, 0, $obj);
        }
    }

    public function add($obj)
    {
        // $this->arrayList[] = $obj;
        return array_push($this->arrayList, $obj);
    }
    public function clear()
    {
        $this->arrayList = array();
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }



    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }
    public function sort()
    {
        sort($this->arrayList);
    }
    public function addAll($arr)
    {
        $this->arrayList = array_merge($this->arrayList, $arr);
    }
    public function reset()
    {
        $this->arrayList = array();
    }
    public function indexOf($obj)
    {
        return array_search($this->arrayList, $obj);
    }
    public function printArray()
    {
        return $this->arrayList;
    }
}
