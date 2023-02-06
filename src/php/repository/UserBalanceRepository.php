<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{

    public function getBalance(string $email): ?int
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT balance FROM users WHERE email = :email');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        $balance = $statement->fetch(PDO::FETCH_ASSOC);

        if ($balance == false) {
            return null;
        }

        return $balance['balance'];
    }

    public function setBalance(string $email, int $balance): void
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('UPDATE users SET balance = :balance WHERE email = :email');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':balance', $balance, PDO::PARAM_INT);
        $statement->execute();
    }
}
