<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/coinSystem/init.php');
include(MODELS . "/userModel.php");
//include_once(MODELS . "/model.php");
/*
	user Controller handles the biz logic and invokes user models to obtain user objects to return to the presentation layer
*/
class userController {
	
	public $model;
	
	//constructor initiates a new model object
	public function __constructor(){
		$this->model = new userModel();
	}
	
	//invoke method for calling model class and obtaining user arrays
	public function invoke(){	
		//if statement to handle http request for user
		if(isset($_GET['user'])){
			switch($_GET['user']){ //switch on user value
				case 'list': //if requesting list return array of user objects
					//$user = $this->model->getuserList();
					include(VIEWS . '/user-list.php');
					break;
				case 'single'://show specific requested user object
					//$user = $this->model->getuser($_GET['book']);
					include(VIEWS . '/user-view.php');
					break;
				case 'create'://show specific requested user object
					//$user = $this->model->getuser($_GET['book']);
					include(VIEWS . '/user-create.php');
					break;
			}//end switch
		} //end if user
			
	} //end invoke
	
	private function login($SSO, $Password){
		$User = $this->model->getUser($SSO);
		
		if($Password == User->getPassword){
			Return true; 
		}else{
			Return false;
		}	
	}
	
	
	private function username($SSO){
		$User = $this->model->getUser($SSO);
		
		$Username = User->getFName.User->LName;

	}
	
		
	}
}

?>