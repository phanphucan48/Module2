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
    // public function test(){

    //     while ($dec>=1){
    //         $bin = $dec % 2;
    //         $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
    // }
}
$stack = new Stack();
$number = 111;
while ($number != 0) {
    $element = $number % 2;
    $stack->Push($element);
    $number = ($number - $element) / 2;
}
echo implode("", $stack->stack);
