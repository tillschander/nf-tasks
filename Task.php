<?php

class Task
{
    public $title;
    private $description;
    public $completed = false;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function setDescription($description)
    {
        if (strlen($description) > 140) {
            throw new Exception('Description is too long.');
        }
        $this->description = $description;
    }

    public function getDescription()
    {
        return "Description: $this->description \n";
    }
}