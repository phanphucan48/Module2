<?php

include_once('Node.php');
class LinkList
{
    /* Link to the first node in the list */
    private $firstNode;

    /* Link to the last node in the list */
    private $lastNode;

    /* Total nodes in the list */
    private $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        /* If this is the first node inserted in the list
       then set the lastNode pointer to it.
    */
        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }
    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            // die(var_dump($this->lastNode));
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        // die(var_dump($current->readNode()));
        while ($current != NULL) {
            if ($current != null) {
                array_push($listData, $current->readNode());
                $current = $current->next;
            }
        }

        // die(var_dump($listData));
        return $listData;
    }
    public function totalNodes()
    {
        return $this->count;
    }
}
