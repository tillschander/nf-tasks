<?php

interface TaskListInterface
{
    public function addTask(Task $task);

    public function removeTask(Task $task);
}