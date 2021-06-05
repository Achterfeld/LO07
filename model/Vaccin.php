<?php

class Vaccin {
    
    public static function getAll() {
        try {
            $database = Model::getInstance();
            $querry = "SELECT * FROM vaccin";
            $statement = $database->prepare($querry);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "Vaccin");
            return $results; 
        } catch (PDOException $e) {
            printf("%s - %s <p>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

?>