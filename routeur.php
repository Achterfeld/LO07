<?php

require('./controler/ControllerVaccin.php');

$query_string = $_SERVER['QUERY_STRING'];

parse_str($query_string, $param);

$action = htmlspecialchars($param['action']);

switch ($action) {
    case 'liste_vaccins':
        ControllerVaccin::$action();
        break;
    
    default:
        # code...
        break;
}

?>