<?php

class WorkoutContent
{
    private $title;
    private $name;

    public function __construct($title, $name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

}