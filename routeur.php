<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./controler/ControllerVaccin.php');

$query_string = $_SERVER['QUERY_STRING'];
parse_str($query_string, $param);

$action = htmlspecialchars($param['action']);

switch ($action) {
    case 'liste_vaccins':
        ControllerVaccin::$action();
        break;
    
    case 'form_vaccin':
        ControllerVaccin::$action();        
        break;
    
    case 'ajout_vaccin':
        ControllerVaccin::$action(htmlspecialchars($_GET["label"]), htmlspecialchars($_GET["doses"]));        
        break;
    default:
        # code...
        break;
}

?>