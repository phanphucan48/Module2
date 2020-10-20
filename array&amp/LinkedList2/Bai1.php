<?php
include_once('Node.php');
class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL) {
            $this->lastNode = $link;
        }

        $this->count++;
    }
    public function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }
    public function add($data, $key)
    {
        if ($key == 0) {
            $this->addFirst($data);
        } else {
            $link = new Node($data);
            $current = $this->firstNode;
            $previous = $this->firstNode;

            for ($i = 0; $i < $key; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $link->next = $current;
            $previous->next = $link;
            $this->count++;
        }
    }
    public function Remove($key)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->data != $key) {
            if ($current->next == NULL)
                return NULL;
            else {
                $previous = $current;
                $current = $current->next;
            }
        }

        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }
}
