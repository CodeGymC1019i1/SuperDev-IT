<?php
include_once "user.php";
include_once "student.php";
include_once "addStudent.php";
include_once "StudentManage.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $address = $_GET["address"];
    $class = $_GET["class"];
    $role = $_GET["role"];
}
$newBei = new Student($name,$phone,$address,$class,$role);

$manager->addStudent($newBei);
header("Location:list.php");
?>;
