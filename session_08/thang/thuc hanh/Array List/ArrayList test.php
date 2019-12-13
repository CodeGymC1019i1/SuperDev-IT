<?php
include "Array List.php";
$listArray = new ArrayList();
$listArray->add(1);
$listArray->add(2);
$listArray->add(66666666);
$listArray->add(535553535);
echo $listArray->get(3) . "<br>";
$listArray->remove(2);
echo $listArray->get(3);