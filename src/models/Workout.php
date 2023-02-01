<?php

class Workout
{
    private $title;
    private $image;
    private $id;
    public function __construct($title, $image, $id)
    {
        $this->title = $title;
        $this->image = $image;
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

    public function getImage():string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }
}