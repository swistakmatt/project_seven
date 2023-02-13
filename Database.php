<?php

class Database
{
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct()
    {
        $this->username = $_ENV["DB_USERNAME"];
        $this->password = $_ENV["DB_PASSWORD"];
        $this->host = $_ENV["DB_HOST"];
        $this->database = $_ENV["DB_DATABASE"];
    }

    public function connect()
    {
        $connection = new PDO(
            "pgsql:host=$this->host;
            dbname=$this->database",
            $this->username,
            $this->password,
            ["sslmode" => "prefer"]
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
}
