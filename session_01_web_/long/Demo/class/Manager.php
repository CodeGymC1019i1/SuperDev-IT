<?php


class StudentManager
{
    public $pathFile;
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function add($student)
    {
        // Tại sao lại Đặt ListStudent =$this->getList(), mà không chuyền trực tiếp vào array_push(getlist(), $student)
        $listStudent = $this->getList();
        array_push($listStudent, $student);
        var_dump($listStudent);
        $this->saveDataToFile($listStudent);

    }

    public function delete()
    {

    }

    public function getList()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson,true);
    }
    // Đẩy file rồi thì phải lưu
    public function saveDataToFile($students)
    {
        $dataJson = json_encode($students);
        file_put_contents($this->pathFile, $dataJson);
    }

}