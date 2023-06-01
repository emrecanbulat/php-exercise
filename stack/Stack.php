<?php

class Stack
{
    public $limit = 5;
    public $array = array();
    public $point = 0;

    public function push($data)
    {
        if ($this->point >= $this->limit) {
            echo "stack is full \n";
            return;
        }

        $this->array[] = $data;
        $this->point += 1;
        echo "data added \n";
    }

    public function pop()
    {
        if (!empty($this->array)) {
            unset($this->array[$this->point]);
            $this->point -= 1;
        } else {
            echo "stack is already empty \n";
        }
    }

    /**
     * @return array
     */
    public function getArray()
    {
        return $this->array;
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->pop();
$stack->pop();


print_r($stack->getArray());
