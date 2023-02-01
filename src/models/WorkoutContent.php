<?php

class WorkoutContent
{
    private $title;
    private $name;
    private $id;

    public function __construct($title, $name, $id)
    {
        $this->title = $title;
        $this->name = $name;
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
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