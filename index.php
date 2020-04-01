<?php

include 'Task.php';
include 'DailyTask.php';
include 'RegularTask.php';
include 'RecurringTask.php';

$task1 = new RegularTask('Learn PHP');
$task1->completed = true;

$task2 = new RegularTask('Water the plants');
$task2->complete();

$task1->setDescription('Write some backend code.');


$daily = new DailyTask('Joggen');
$daily->setDescription('Einmal um den Block laufen.');

$daily->setTime(10);
echo $task2->getDescription();

$recurring = new RecurringTask('Auto putzen');
$recurring->setDescription('Zur Tanke fahren und durch die Waschstraße schicken.');
echo $recurring->getDescription();