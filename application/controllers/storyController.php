<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/coinSystem/init.php');
//include_once(MODELS . "/storyModel.php");
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
					$stories = $this->model->getStoryList();//parse to array $stories
					include(VIEWS . '/story-list.php');
					break;
				case 'single'://show specific requested story object
					$story = $this->model->getStory($_GET['book']);
					include(VIEWS . '/story-view.php');
					break;
				case 'create'://show specific requested story object
					include(VIEWS . '/story-create.php');
					break;
			}//end switch
		} //end if story
			
	} //end invoke
	
	private function tallyVotes($storyID) {
		$votes = $this->model->getVotes($storyID);
		$nos = $votes[1] - $votes[0];

		if($votes[0] >= 4) {
			return "approved";
		} else if ($nos >= 4) {
			return "denied";
		} else {
			return "pending";
		}
	}
	
	private function tallyVotesOnDead($storyID) {
		$votes = $this->model->getVotes($storyID);
		$nos = $votes[1] - $votes[0];

		if($votes[0] >= $nos) {
			return "approved";
		} else {
			return "denied";
		}
	}

	private function voteYes($storyID, $SSO) {
		$this->$model->voteYes($storyID, $SSO);
		$this->tallyVotes($storyID);
	}

	private function voteNo($storyID, $SSO) {
		$this->$model->voteNo($storyID, $SSO);
		$this->tallyVotes($storyID);
	}

	private function allowedToVote($storyID, $SSO) {
		$story = $this->model->getStoryByID($storyID);
		if ($SSO == $story->getSubSSO) {
			return false;
		} else {
			return true;
		}
	}
}