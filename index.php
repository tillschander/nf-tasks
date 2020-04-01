<?php

include 'Task.php';
include 'DailyTask.php';

$task1 = new Task('Learn PHP');
$task1->completed = true;

$task2 = new Task('Water the plants');
$task2->complete();

$task1->setDescription('Write some backend code.');


$daily = new DailyTask('Joggen');
$daily->setDescription('Einmal um den Block laufen.');

$daily->setTime(10);
echo $daily->getDescription();
// 10 Uhr: Einmal um den Block laufen.