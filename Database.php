<?php

require_once 'config.php';
class Database
{
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct()
    {
        $this->username = DB_USERNAME;
        $this->password = DB_PASSWORD;
        $this->host = DB_HOST;
        $this->database = DB_DATABASE;
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
