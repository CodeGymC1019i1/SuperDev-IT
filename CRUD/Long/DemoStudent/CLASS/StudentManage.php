<?php
include_once "FIle.php";
include_once "Student.php";
class StudentManage extends FIle
{
    function add($student) {
        $listStudent = $this->readFile();
        $data = [
            'name' => $student->name,
            'age' => $student->age,
            'address' => $student->address,
            'group' => $student->group
        ];
        array_push($listStudent, $data);
        $this->saveFile($listStudent);
        header("Location: ../index.php");
    }

    function Delete($index) {
        $data = $this->readFile();
        if (array_key_exists($index, $data)) {
            array_splice($data,$index,1);
        };
        $this->saveFile($data);

    }

    //function getData
    public function getData() {
       $data = $this->readFile();
       $arr=[];
       foreach ($data as $key => $value ) {
           $student = new Student($value['name'], $value['age'],$value['address'], $value['group']);
           array_push($arr,$student);
       }

      return $arr;

    }


    //ham lay sinh vien
//    public  function getList() {
//      var_dump($dadaList);  $dadaList = $this -> readFile();
////        var_dump($dadaList);
//    }
}