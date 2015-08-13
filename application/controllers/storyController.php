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
					$stories = $this->model->getApvStories();//parse to array $stories
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
		
		if(isset($_POST['receiverSso'])){
			$result = $this->model->createStory('212335809', $_POST['receiverSso'], $_POST['story'], date('m/d/y'), $_POST['value1'], $_POST['value2'], $_POST['value3'], $_POST['title']);
			if($result['error'] == false){
				$message = 'Your Story has been submitted successfully, please wait for the board to review your submission.';
			} else {
				$message = 'Sorry Something went wrong with you submission. Please speak to a system admin.';
			}
			echo '<br/>';
			switch($result['error']){
					case true:
						echo '<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							'.$message.'
							</div>';
						break;
					case false:
						echo '<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							'.$message.'<br />'.var_dump($result).'
							</div>';
						break;
				}
			$stories = $this->model->getApvStories();//parse to array $stories
			include(VIEWS . '/story-list.php');
		}
			
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