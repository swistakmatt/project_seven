<?php

class User
{
    private $nickname;
    private $email;
    private $password;

    public function __construct(string $nickname, string $email, string $password)
    {
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }
}
