<?php

/**
 *	Affichage des erreurs
 */

ini_set('display_errors', true);

/**
 * 	PDO settings
 */

define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "troiswa");
define("DB_NAME", "ma_bdd");

/**
 *	Définitions des routes
 *
 *	'route_name' => array ('Namespace', 'Controller', 'method')
 */

$routes = array(
	'default' => array('Controllers','DefaultController','defaultAction'),
	'error404' => array('Controllers','DefaultController','error404Action'),
);

?>
