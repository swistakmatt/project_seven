<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT * FROM users WHERE email = :email');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['nickname'],
            $user['email'],
            $user['password'],
            $user['balance']
        );
    }

    public function addUser(User $user): void
    {
        date_default_timezone_set("Europe/Warsaw");

        $connection = $this->database->connect();
        $statement = $connection->prepare('INSERT INTO users (nickname, email, password, created) VALUES (?, ?, ?, ?)');
        $statement->execute([
            $user->getNickname(),
            $user->getEmail(),
            $user->getPassword(),
            date("Y-m-d H:i:s")
        ]);
    }
}
