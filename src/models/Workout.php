<?php

class Workout
{
    private $title;
    private $image;
    public function __construct($title, $image)
    {
        $this->title = $title;
        $this->image = $image;
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