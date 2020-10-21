<?php
class Patient
{
    public $name;
    public $code;
    public $next;
    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = Null;
    }
    public function readPatient()
    {
        echo "name: " . $this->name . " ," . "code: " . $this->code;
    }
}
class Queue
{
    public $font = null;
    public $back = null;
    public function __construct()
    {
        $this->font = NULL;
        $this->back = NULL;
    }

    public function isEmpty()
    {
        return $this->font == null;
    }
    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Patient($name, $code);
        $this->back->name = $name;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function __toString()
    {
        $data = array();
        $currden = $this->font;
        if ($currden != NULL) {
            array_push($data, $currden->readPatient());
            $currden = $currden->next;
        }
        return $data;
    }
}

$queue = new Queue();
$queue->enqueue("Smit", 5);
$queue->enqueue("quang", 6);
$queue->enqueue("tư", 6);
echo "<pre>";
print_r($queue->__toString());
