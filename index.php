<?php

/**
 * 	TODO :
 * 	- gestion des erreurs + debug bar (ajax)
 * 	- ebauche d'ORM
 */

session_start();

require("config.php");
require("Core/class_autoload.php");
require("Core/routing.php");

/**
 *	Lancement de l'application
 */ 

$controller = new $class();
$controller->$method();

?>