<?php

class DBConnect
{
    private $dsn;
    private $username;
    private $password;
    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=adminnews;charset=utf8";
        $this->username = "root";
        $this->password = "";
    }
    // kết nối mới DB
    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            return $conn;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
