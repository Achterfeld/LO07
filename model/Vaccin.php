<?php

require(__DIR__.'/../model/Model.php');

class Vaccin {
    
    public static function getAll() {
        try {
            $database = Model::getInstance();
            $querry = "SELECT * FROM vaccin;";
            $statement = $database->prepare($querry);
            $statement->execute();
            $results = $statement->fetchAll();
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s <p>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
}
?>