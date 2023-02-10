<?php

class User
{
    private $nickname;
    private $email;
    private $password;
    private $balance;
    private $role;
    private $id_user;

    public function __construct(string $nickname, string $email, string $password, int $balance = 0, int $role = 0, int $id = 0)
    {
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
        $this->balance = $balance;
        $this->role = $role;
        $this->id_user = $id;
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

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function getRole(): int
    {
        return $this->role;
    }

    public function getId(): int
    {
        return $this->id_user;
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

    public function setBalance(int $balance)
    {
        $this->balance = $balance;
    }
}
