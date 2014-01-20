<?php 

namespace Core;

abstract class Controller {

	protected $vars;

	public function __get($name) {
		return $this->vars[$name];
	}

	protected function render($view, $data) {

		$this->vars = $data;

		include("Views/header.php");
		include("Views/".$view);
		include("Views/footer.php");

	}

}

?>