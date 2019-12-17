<?php
include_once('Node.php');

class MyLinkList
{
    private $firstNode;

    private $lastNode;

    private $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        //khởi tạo một node mới
        $link = new Node($data);

        //gán node kế sau của node mới khởi tạo là node đầu tiên
        $link->next = $this->firstNode;

        //gán tiếp node đầu của danh sách là node mới khởi tạo.
        $this->firstNode = $link;

        if ($this->lastNode == NULL)
            //nếu node mới khởi tạo là node đầu tiên được thêm vào danh sách thì sẽ đặt node đó là node cuối cùng của danh sách
            $this->lastNode = $link;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            //tạo node
            $link = new Node($data);
            //gán node kế tiếp phía sau của node cuối cùng hiện tại là node mới khởi tạo
            $this->lastNode->next = $link;
            //là node cuối cùng nên node kế phía sau sẽ được gán giá trị NULL
            $link->next = NULL;
            //gán node mới khởi tạo là node cuối cùng của danh sách.
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFrist($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function deleteLast()
    {
        if ($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if ($currentNode->next === NULL) {
                $this->_firstNode = NULL;
            } else {


                $previousNode = NULL;
                while ($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }

                $previousNode->next = NULL;
                $this->_totalNode--;
                return TRUE;
            }
        }
        return FALSE;
    }

    public function deleteFirst() {
        if ($this->_firstNode !== NULL) {
            if ($this->_firstNode->next !== NULL) {
                $this->_firstNode = $this->_firstNode->next;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNode--;
            return TRUE;
        }
        return FALSE;
    }

}