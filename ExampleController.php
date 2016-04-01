<?php
/**
 * Controller example.
 * @author Alexey Vaskovsky
 * @see http://vaskovsky.ru/mvc-ajax/
 */
require_once "ExampleModel.php";
class ExampleController {
	function actionMain() {
		$model = new ExampleModel();
		echo $model->getData();
	}
}
