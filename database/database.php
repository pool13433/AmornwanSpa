<?php

class Database {

    private $db = null;
    private $username = 'root';
    private $password = '';
    private $database = 'db_spa';
    private $server = 'localhost';

    public function __construct() {
        $this->db = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->database . ';charset=utf8mb4', $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function openDb() {
        return $this->db;
    }

    public function closeDb() {
        $this->db = null;
    }

}
