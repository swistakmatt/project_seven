<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/CoinflipDraw.php';

class CoinflipDrawRepository extends Repository
{

    public function getDraws(): array
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT * FROM coinflip_draws');
        $statement->execute();

        $draws = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $draws;
    }

    public function getDraw(int $id_draw): ?CoinflipDraw
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare('SELECT * FROM coinflip_draws WHERE id_draw = :id_draw');
        $statement->bindParam(':id_draw', $id_draw, PDO::PARAM_INT);
        $statement->execute();

        $draw = $statement->fetch(PDO::FETCH_ASSOC);

        if ($draw == false) {
            return null;
        }

        return new CoinflipDraw(
            $draw['id_draw'],
            $draw['id_user'],
            $draw['side'],
            $draw['amount'],
            $draw['result']
        );
    }

    public function addDraw(CoinflipDraw $draw): void
    {

        date_default_timezone_set("Europe/Warsaw");

        $connection = $this->database->connect();
        $statement = $connection->prepare('INSERT INTO coinflip_draws (id_user, coinflip_timestamp, amount, result, side) VALUES (?, ?, ?, ?, ?)');
        $statement->execute([
            $draw->getIdUser(),
            date("Y-m-d H:i:s"),
            $draw->getAmount(),
            $draw->getResult(),
            $draw->getSide()
        ]);
    }
}
