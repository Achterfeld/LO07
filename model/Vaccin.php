<?php

require(__DIR__.'/../model/Model.php');

class Vaccin {
    
    public static function getAll() {
        try {
            $database = Model::getInstance();
            $querry = "SELECT * FROM vaccin";
            $statement = $database->prepare($querry);
            $statement->execute();
            $results = $statement->fetchAll();
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s <p>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


 public static function insert($label, $doses) {
    try {
     $database = Model::getInstance();
  
     // recherche de la valeur de la clé = max(id) + 1
     $query = "select max(id) from vaccin";
     $statement = $database->query($query);
     $tuple = $statement->fetch();
     $id = $tuple['0'];
     $id++;
  
     // ajout d'un nouveau tuple;
     $query = "insert into vaccin value (:id, :label, :doses)";
     $statement = $database->prepare($query);
     $statement->execute([
       'id' => $id,
       'label' => $label,
       'doses' => $doses
     ]);
     return $id;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return -1;
    }
   }
  
   public static function update($id, $doses) {
    try {
     $database = Model::getInstance();
  
     // ajout d'un nouveau tuple;
     $query = "UPDATE vaccin SET doses = :doses WHERE id = :id";
     $statement = $database->prepare($query);
     $statement->execute([
       'id' => $id,
       'doses' => $doses
     ]);
     return $id;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return -1;
    }
   }

}
?>