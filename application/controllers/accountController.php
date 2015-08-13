<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/coinSystem/init.php');
include_once(MODELS . "/storyModel.php");
/*
	Account controller handles logic for the account page
*/
class AccountController {
	
	public $model;
	public $userModel;
	
	//constructor initiates a new model object
	public function __construct(){
		$this->model = new StoryModel();
		$this->userModel = new userModel();
	}
	
	//invoke method for calling model class and obtaining story arrays
	public function invoke(){	
		//if statement to handle http request for STORY
		if(isset($_GET['account'])){
			switch($_GET['account']){ //switch on story value
				case 'notifications': //if requesting list return array of story objects
					$pendStories = $this->model->getStoriesNotVotedOn();//parse to array $stories
					include(VIEWS . '/account-notifications');
					break;
				case 'submissions'://show specific requested story object
					$story = $this->model->getStoryByID($_GET['id']);
					include(VIEWS . '/story-view.php');
					break;
				case 'recieved'://show specific requested story object
					include(VIEWS . '/story-create.php');
					break;
				case 'reviewed'://show user page
					$pendStories = $this->model->getStoriesNotVotedOn("212414600");
					include('./account.php');
					break;
				case 'account'://show user page
					$pendStories = $this->model->getStoriesNotVotedOn("212414600");
					include('./account.php');
					break;
			}//end switch	
		} //end if story
		}
			
	} //end invoke
}