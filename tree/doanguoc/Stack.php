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
    public function reverse() // String Param, Void
    {
        $this->stack = array_reverse($this->stack);
    }
}
$stack = new Stack();
$stack->Push(1);
$stack->Push(2);
$stack->Push(3);
$stack->Push(4);
echo "<pre>";
print_r($stack);
$stack->reverse();
print_r($stack);
// $this->stack = array_reverse($this->stack);
