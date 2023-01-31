<?php

class TrackedWorkoutContent
{

    private $email;
    private $name;
    private $body_part;
    private $weight;
    private $reps;

    public function __construct($email, $name,$body_part, $weight, $reps)
    {
        $this->email = $email;
        $this->name = $name;
        $this->body_part = $body_part;
        $this->weight = $weight;
        $this->reps = $reps;
    }

    public function getBody_part()
    {
        return $this->body_part;
    }

    public function setBody_part($body_part): void
    {
        $this->body_part = $body_part;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }
    public function getReps()
    {
        return $this->reps;
    }
    public function setReps($reps): void
    {
        $this->reps = $reps;
    }


}