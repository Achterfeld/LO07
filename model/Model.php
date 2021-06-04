<?php

class Model extends PDO {
    
    private $database;

    public function __construct() {
        $dsn = 'mysql::dbname=LO07;host=localhost;charset=utf8';
        $username = 'root';
        $password = '';
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try {
            $this->database = new PDO($dsn, $username, $password, $options);
        } catch(PDOException $e) {
            printf("%s - %s <p>\n", $e->getCode(), $e->getMessage());
        }
    }

    public static function getInstance() {
        return $this->database;
    }
}