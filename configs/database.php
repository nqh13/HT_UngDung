<?php

class Database {

    private $host;
    private $dbname;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $dbname, $username, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    public function connect() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            echo "Không thể kết nối database: " . $e->getMessage();
            return false;
        }
    }

    public function disconnect() {
        $this->connection = null;
    }

    public function query($sql) {
        try {
            return $this->connection->query($sql);
        } catch (PDOException $e) {
            echo "Không thể thực thi câu truy vấn: " . $e->getMessage();
            return false;
        }
    }

    public function prepare($sql) {
        return $this->connection->prepare($sql);
    }

    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }

}
