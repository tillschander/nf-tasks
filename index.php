<?php

include 'Task.php';
include 'DailyTask.php';
include 'RegularTask.php';
include 'RecurringTask.php';
include 'TaskListInterface.php';
include 'TaskList.php';

$regular = new RegularTask('Learn PHP');
$regular->setDescription('Write some backend code.');
$regular->complete();

$daily = new DailyTask('Joggen');
$daily->setDescription('Einmal um den Block laufen.');
$daily->setTime(10);

$recurring = new RecurringTask('Auto putzen');
$recurring->setDescription('Zur Tanke fahren und durch die Waschstraße schicken.');

$tl = new TaskList();
$tl->addTask($regular);
$tl->addTask($daily);
$tl->addTask($recurring);
var_dump($tl);

$tl->removeTask($daily);
var_dump($tl);