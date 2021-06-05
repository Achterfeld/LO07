<?php

class ControllerVaccin {
    
    public static function liste_vaccins() {
        $results = Vaccin::getAll();

        include 'config.php';

        $vue = $root.'/view/vaccin/viewAll';

        require('$vue');
    }
}

?>