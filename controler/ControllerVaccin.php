<?php

class ControllerVaccin {
    
    public static function liste_vaccins() {
        $result = ModelVaccin::getAll();

        include 'config.php';

        $vue = $root.'/view/vaccin/viewAll';

        require('$vue');
    }
}

?>