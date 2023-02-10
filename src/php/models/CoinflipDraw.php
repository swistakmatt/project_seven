<?php

class CoinflipDraw
{
    private $id_draw;
    private $id_user;
    private $result;
    private $amount;
    private $side;

    public function __construct(int $id_user, string $result, int $amount, string $side, int $id_draw = 0)
    {
        $this->id_draw = $id_draw;
        $this->id_user = $id_user;
        $this->side = $side;
        $this->amount = $amount;
        $this->result = $result;
    }

    public function getIdDraw(): int
    {
        return $this->id_draw;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function getSide(): string
    {
        return $this->side;
    }

    public function setIdUser(int $id_user)
    {
        $this->id_user = $id_user;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    public function setResult(string $result)
    {
        $this->result = $result;
    }

    public function setSide(string $side)
    {
        $this->side = $side;
    }
}
