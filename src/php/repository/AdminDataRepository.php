<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class AdminDataRepository extends Repository
{

    public function getAdminData(): string
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT users.id_user, users.nickname, users.email, users.created, users.role, users.balance, users_claims.claim_timestamp FROM users LEFT JOIN users_claims ON users.id_user = users_claims.id_user ORDER BY users.id_user');
        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($users == false) {
            return json_encode([]);
        }

        return json_encode($users);
    }
}
