<?php 

namespace Controllers;

use Models\MyModel;
use Core\Controller;

class DefaultController extends Controller {

	public function defaultAction() {

		$data = "Hello from controller !";

		$MyModel = new MyModel();
		$data2 = $MyModel->test();

		$this->render('default.php', array(
			'data' => $data,
			'data2' => $data2
		));
	}

	public function error404Action() {

		$this->render('error404.php', array(
		));
	}

}

?>