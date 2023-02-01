<?php

class Exercise
{
    private $name;
    private $bodyPart;

    public function __construct($name, $bodyPart)
    {
        $this->name = $name;
        $this->bodyPart = $bodyPart;
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