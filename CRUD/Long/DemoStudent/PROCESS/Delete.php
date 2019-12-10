<?php

include_once "../CLASS/StudentManage.php";
$index = (int)$_GET['index'];

$studentManager = new StudentManage("../DATA/data.json");

$studentManager->Delete($index);

header("Location: ../index.php");