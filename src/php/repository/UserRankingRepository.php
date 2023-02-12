<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRankingRepository extends Repository
{

    public function getRanking(): string
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT nickname, balance FROM users ORDER BY balance DESC');
        $statement->execute();

        $ranking = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($ranking == false) {
            return json_encode([]);
        }

        return json_encode($ranking);
    }
}
