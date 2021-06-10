<?php

require(__DIR__.'/../model/Vaccin.php');

class ControllerVaccin {
    
    public static function liste_vaccins() {
        $results = Vaccin::getAll();

        include '../../../config.php';

        require(__DIR__.'/../view/vaccin/viewAll.php');
    }

    public static function form_vaccin() {
        require(__DIR__.'/../view/vaccin/viewForm.php');
    }

    public static function ajout_vaccin($label , $nbDoses) {
        Vaccin::insert($label, $nbDoses);
        require(__DIR__.'/../view/vaccin/viewAjout.php');    
    }
}

?>