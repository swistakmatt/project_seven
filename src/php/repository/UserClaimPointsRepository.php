<?php

// require_once __DIR__ . '/../models/User.php';
require_once 'Repository.php';
require_once __DIR__ . '/../models/UserClaimPoints.php';

class UserClaimPointsRepository extends Repository
{

    public function getClaimPoints(string $ID_USER): ?UserClaimPoints
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT * FROM users_claims WHERE id_user = :ID_USER');
        $statement->bindParam(':ID_USER', $ID_USER, PDO::PARAM_STR);
        $statement->execute();

        $claimPoints = $statement->fetch(PDO::FETCH_ASSOC);

        if ($claimPoints == false) {
            return null;
        }

        return new UserClaimPoints(
            $claimPoints['id_claim'],
            $claimPoints['timestamp'],
            $claimPoints['id_user']
        );
    }

    public function addClaimPoints(UserClaimPoints $claimPoints): void
    {
        date_default_timezone_set("Europe/Warsaw");

        $connection = $this->database->connect();
        $statement = $connection->prepare('INSERT INTO users_claims(id_user, timestamp) VALUES (?, ?)');
        $statement->execute([
            $claimPoints->getIdUser(),
            date("Y-m-d H:i:s")
        ]);
    }

    public function setClaimPoints(string $ID_USER): void
    {

        date_default_timezone_set("Europe/Warsaw");

        $connection = $this->database->connect();
        $statement = $connection->prepare('UPDATE users_claims SET timestamp = :TIMESTAMP  WHERE id_user = :ID_USER');
        $statement->bindParam(':ID_USER', $ID_USER, PDO::PARAM_STR);
        $statement->bindParam(':TIMESTAMP', date("Y-m-d H:i:s"), PDO::PARAM_INT);
        $statement->execute();
    }

    public function getTimestamp(string $ID_USER): ?string
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT timestamp FROM users_claims WHERE id_user = :ID_USER');
        $statement->bindParam(':ID_USER', $ID_USER, PDO::PARAM_STR);
        $statement->execute();

        $claimPoints = $statement->fetch(PDO::FETCH_ASSOC);

        if ($claimPoints == false) {
            return null;
        }

        return $claimPoints['timestamp'];
    }

    public function setTimestamp(string $ID_USER, string $TIMESTAMP): void
    {

        $connection = $this->database->connect();
        $statement = $connection->prepare('UPDATE users_claims SET timestamp = :TIMESTAMP  WHERE id_user = :ID_USER');
        $statement->bindParam(':ID_USER', $ID_USER, PDO::PARAM_STR);
        $statement->bindParam(':TIMESTAMP', $TIMESTAMP, PDO::PARAM_INT);
        $statement->execute();
    }
}
