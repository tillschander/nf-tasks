<?php

$task1 = new Task('Learn PHP');
$task1->completed = true;

$task2 = new Task('Water the plants');
$task2->complete();

$task1->setDescription('Write some backend code.');
echo $task1->getDescription();

echo $task1->description;