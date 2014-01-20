<?php

/**
 *	Gestion des routes
 */

if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if (isset($routes[$page])) {
		$namespace = $routes[$page][0];
		$class = $namespace."\\".$routes[$page][1];
		$method = $routes[$page][2];
	} else {
		$namespace = 'Controllers';
		$class = 'Controllers'."\\".'DefaultController';
		$method = 'error404Action';	
	}	
} else {
	$namespace = 'Controllers';
	$class = 'Controllers'."\\".'DefaultController';
	$method = 'error404Action';	
}

?>