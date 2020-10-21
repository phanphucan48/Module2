<?php
class Stack
{
    public $stack;
    public $limit;
    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
    public function Push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException('stack is full');
        }
    }
    public function isEmpty()
    {
        if (count($this->stack) === 0) {
            return "Mảng rỗng";
        }
        return "Có mảng";
    }

    public function Pop()
    {

        return array_shift($this->stack);
    }
}


$stack = new Stack();
$stack->Push("phan phuc an");
$stack->Push("phan quoc dung");
$stack->Push("phan quoc huy");
$stack->Push("phan quoc duy");
$stack->Push("phan quoc hai");

$stack->Pop();
$stack->Pop();
$stack->Pop();

$stack->Push("phan thuy trang");
$stack->push("phan thuy vân");

echo $stack->isEmpty();


echo "<pre>";
print_r($stack);
