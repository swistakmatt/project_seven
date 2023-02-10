<?php

class UserClaimPoints
{
    private $id_claim;
    private $timestamp;
    private $id_user;

    public function __construct(int $id_user, int $id_claim, string $timestamp)
    {
        $this->id_claim = $id_claim;
        $this->timestamp = $timestamp;
        $this->id_user = $id_user;
    }

    public function getIdClaim(): int
    {
        return $this->id_claim;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    public function setIdUser(int $id_user)
    {
        $this->id_user = $id_user;
    }

    public function setIdClaim(int $id_claim)
    {
        $this->id_claim = $id_claim;
    }

    public function setTimestamp(string $timestamp)
    {
        $this->timestamp = $timestamp;
    }
}
