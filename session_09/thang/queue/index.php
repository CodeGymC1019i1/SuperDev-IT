<?php
include_once "Node.php";
include_once "Queue.php";




$queue = new Queue();
$queue->isEmpty();

$queue->enqueue("thang");
var_dump($queue);
echo "<br>";
$queue->enqueue("thua");
echo "<br>";
$queue->enqueue("666");
echo "<br>";
$queue->enqueue("77");
echo "<br>";
$queue->dequeue();
echo $queue;