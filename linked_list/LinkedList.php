<?php

class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insertAtBack($data)
    {
        // create new node
        $newNode = new Node();
        $newNode->setData($data);

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->getNext() != null) {
                $current = $current->getNext();
            }
            $current->setNext($newNode);
        }
    }

    public function insertAtFront($data)
    {
        // create new node
        $newNode = new Node();
        $newNode->setData($data);

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $newNode->setNext($this->head);
        }
    }

    public function insertAfterCustom($data, $target)
    {
        // create new node
        $newNode = new Node();
        $newNode->setData($data);

        if ($this->head != null) {
            $current = $this->head;
            while ($current->getData() != $target && $current->getNext() != null) {
                $current = $current->getNext();
            }
            $newNode->setNext($current->getNext());
            $current->setNext($newNode);
        }
    }

}