<?php

class ManageStudent {
    public $pathfile;

    public function __construct($pathfile)
    {$this->pathfile = $pathfile;
    }
    public function addStudent ($student) {
        $listStudent = $this->readFile();
        array_push($listStudent, $student);
        $this->savaDataFile($listStudent);
    }

    public function readFile() {
        $datajson = file_get_contents($this->pathfile);
        return json_decode($datajson,true);
    }

    public function savaDataFile($student) {

        $datajson= json_encode($student);
        return file_put_contents($this->pathfile,$datajson);
    }


}