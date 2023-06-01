<?php

class Node
{
    private $data;
    private $next;

    public function __construct()
    {
        $this->data = 0;
        $this->next = null;
    }

    /**
     * @param int $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return null
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param null $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }
}