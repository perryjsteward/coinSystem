<?php
include_once(MODEL_PATH . "/model.php");

class StoryController {
	public $model;
	//constructor initiates a new model object
	public function __constructor(){
		$this->model = new Model();
	}
	//invoke method for calling model class and obtaining story arrays
	public function invoke(){	
		//if statement to handle http request for list or specific story
		if(!isset($_GET['story'])){
			$story = $this->model->getStoryList();
			include('story.php?view=list');
		} else {
			//show specific requested story
			$story = $this->model->getStory($_GET['book']);
			include ('story.php?view=specific');
		}
	}
}

?>