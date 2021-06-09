<?php

require(__DIR__.'/../model/Vaccin.php');

class ControllerVaccin {
    
    public static function liste_vaccins() {
        $results = Vaccin::getAll();

        include 'config.php';

        require(__DIR__.'/../view/vaccin/viewAll.php');
    }
}

?>