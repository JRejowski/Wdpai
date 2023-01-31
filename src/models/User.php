<?php

class User
{
    private $email;
    private $password;
    private $id;

    public function __construct(string $email,string $password, int $id=null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;

    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }


}