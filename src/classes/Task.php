<?php

class Task
{
    private $id;
    private $name;
    private $description;
    private $date;
    private $priority;

    function __construct($id, $name, $description, $date, $priority)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
        $this->priority = $priority;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate()
    {
        return $this->date;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority()
    {
        return $this->priority;
    }
}
