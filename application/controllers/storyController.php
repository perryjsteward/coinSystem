<?php
include_once(MODEL_PATH . "/model.php");

class StoryController {
	public $model;
	
	public function __constructor(){
		$this->model = new Model();
	}
	
	public function invoke(){
		
		//if statement to handle http request
		if(!isset($_GET['book'])){
			$books = $this->model
		}
	}
}

?>