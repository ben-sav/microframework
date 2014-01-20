<?php

/**
 *	Chargement auto des classes appelées
 *
 *	namespace My\Namespace;
 *	class My_class {//...}
 *
 *	=> include('My/Namespace/My_class.php')
 */

function classAutoloader($class) {
	$class = str_replace("\\", "/", $class).".php";
	include($class);
}

spl_autoload_register('classAutoloader');

?>