<?php

class Exercise
{
    private $name;
    private $bodyPart;
    private $id;

    public function __construct($name, $bodyPart,$id)
    {
        $this->name = $name;
        $this->bodyPart = $bodyPart;
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


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getBodyPart()
    {
        return $this->bodyPart;
    }


    public function setBodyPart($bodyPart): void
    {
        $this->bodyPart = $bodyPart;
    }




}