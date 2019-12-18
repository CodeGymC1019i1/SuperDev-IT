<?php

include_once "Dancer.php";
$player1 = new Dancer("tttt", "nam");
$player2 = new Dancer("bbbb", "nam");
$player3 = new Dancer("mmm", "nam");
$player4 = new Dancer("kkk", "nam");
$dancer1 = new SplQueue();
$dancer2 = new SplQueue();
$dancer1->enqueue($player1);
$dancer1->enqueue($player2);
$dancer1->enqueue($player2);
$dancer1->enqueue($player3);
var_dump($dancer1);
die();
$player11 = new Dancer("dddd", "nữ");
$player21 = new Dancer("bbbb", "nữ");
$player31 = new Dancer("ccc", "nữ");
$player41 = new Dancer("eeee", "nữ");
$dancer2->enqueue($player11);
$dancer2->enqueue($player21);
$dancer2->enqueue($player31);
$dancer2->enqueue($player41);

