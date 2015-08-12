<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/coinSystem/init.php');
//include_once(MODELS . "/model.php");
/*
	Story Controller handles the biz logic and invokes story models to obtain story objects to return to the presentation layer
*/
class StoryController {
	
	public $model;
	
	//constructor initiates a new model object
	public function __constructor(){
		$this->model = new Model();
	}
	
	//invoke method for calling model class and obtaining story arrays
	public function invoke(){	
		//if statement to handle http request for STORY
		if(isset($_GET['story'])){
			switch($_GET['story']){ //switch on story value
				case 'list': //if requesting list return array of story objects
					//$story = $this->model->getStoryList();
					include(VIEWS . '/storylist.php');
					break;
				case 'single'://show specific requested story object
					//$story = $this->model->getStory($_GET['book']);
					include(VIEWS . '/storyview.php');
			}//end switch
		} //end if story
			
	} //end invoke
	
	
	
}

?>