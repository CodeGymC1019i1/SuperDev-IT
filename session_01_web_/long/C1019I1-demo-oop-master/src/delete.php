<?php
include_once "../class/Student.php";
include_once "../class/StudentManager.php";

$index = (int)$_GET['index'];

$studentManager  =  new StudentManager("../data.json");
$studentManager->delete($index);

header("Location: ../index.php");