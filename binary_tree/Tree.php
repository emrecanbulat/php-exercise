<?php

include("TreeNode.php");

class Tree
{
    private $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function addData($data)
    {
        $newNode = new TreeNode();
        $newNode->setData($data);

        if ($this->root == null) {
            $this->root = $newNode;
            echo $data . " added \n";
        } else {
            $current = $this->root;
            while (true) {
                if ($current->data >= $data) {
                    if ($current->getLeft() == null) {
                        $current->setLeft($newNode);
                        echo $data . " added \n";
                        break;
                    }
                    $current = $current->getLeft();
                } else {
                    if ($current->getRight() == null) {
                        $current->setRight($newNode);
                        echo $data . " added \n";
                        break;
                    }
                    $current = $current->getRight();
                }
            }
        }
    }

    public function listTree($current = null)
    {
        if ($current == null) {
            $current = $this->root;
        }

        //echo $current->data . "\n"; //preorder

        if ($current->getLeft() != null) {
            $this->listTree($current->getLeft());
        }
        echo $current->data . "\n"; //inorder
        if ($current->getRight() != null) {
            $this->listTree($current->getRight());
        }
//        echo $current->data . "\n"; //postorder
    }

    public function search($search, $current = null)
    {
        if ($current == null) {
            $current = $this->root;
        }
        if ($search == $current->data) {
            echo $search . " found\n";
        } else if ($search > $current->data && $current->getRight() != null) {
            $this->search($search, $current->getRight());
        } else if ($search < $current->data && $current->getLeft() != null) {
            $this->search($search, $current->getLeft());
        } else {
            echo $search . " not found\n";
        }
    }

}

$t = new Tree();

$t->addData(9);
$t->addData(2);
$t->addData(4);
$t->addData(15);
$t->addData(7);
$t->addData(11);
echo "\n";
$t->listTree();
echo "\n";
$t->search(9);
$t->search(15);
$t->search(7);
$t->search(111);
echo "\n";
