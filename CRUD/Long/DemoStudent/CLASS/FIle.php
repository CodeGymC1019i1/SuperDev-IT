<?php


class FIle
{
    public $pathfile;

    function __construct($pathfIle)
    {
        $this-> pathfile = $pathfIle;
    }

    function readFile()
    {
        $datajson = file_get_contents($this->pathfile);
        return json_decode($datajson,true);
    }

    function saveFile($student)
    {
//        $listStudent = $this->readFile();
        $data = json_encode($student);
         file_put_contents($this->pathfile,$data);

        
    }

}