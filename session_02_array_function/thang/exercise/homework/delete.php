<?php
$id = $_GET["id"];
//include "StudentManage.php";
$listStudent = file_get_contents('data.json');
$array = json_decode($listStudent, true);
array_splice($array, $id, 1);
$arr1 = json_encode($array);
file_put_contents("data.json", $arr1);
header('Location:list.php');