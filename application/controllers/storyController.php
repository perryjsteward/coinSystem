<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/coinSystem/init.php');
include_once(MODELS . "/storyModel.php");
/*
	Story Controller handles the biz logic and invokes story models to obtain story objects to return to the presentation layer
*/
class StoryController {
	
	public $model;
	
	//constructor initiates a new model object
	public function __construct(){
		$this->model = new StoryModel();
	}
	
	//invoke method for calling model class and obtaining story arrays
	public function invoke(){	
		//if statement to handle http request for STORY
		if(isset($_GET['story'])){
			switch($_GET['story']){ //switch on story value
				case 'list': //if requesting list return array of story objects
					$stories = $this->model->getApprovedList();//parse to array $stories
					include(VIEWS . '/story-list.php');
					break;
				case 'single'://show specific requested story object
					$story = $this->model->getStoryByID($_GET['id']);
					include(VIEWS . '/story-view.php');
					break;
				case 'create'://show specific requested story object
					include(VIEWS . '/story-create.php');
					break;
			}//end switch
		} //end if story
		
		//if create form submission posts
		if(isset($_POST['receiverSso'])){
			echo 'test';
		}
			
	} //end invoke
	
	
	
}

?>