<?php

class RecurringTask extends Task
{
    public $day = 'Montag';

    public function getDescription()
    {
        return $this->day . ': ' . $this->description;
    }
}