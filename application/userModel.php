<?php
	include(ROOT_PATH . '/application/user.php');
	include(ROOT_PATH . '/application/services/database.php');

	class userModel {
		private $db;

		public function __construct() {
			$this->db = new Database();
			$this->db->connect();
		}

		public function getUserList() {
			$result = $this->db->query('select * FROM personal');
			$users = mysqli_fetch_all($result['result']);

			$userList = array();
			foreach($users as $user) {
				$userObj = new user($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $user[6], $user[7], $user[8], $user[9]); 
				array_push($userList, $userObj);
			}
			return $userList;
		}
		
		public function getUser($SSO) {
			$db = new Database();
			$db->connect();
			$result = $db->query('select * FROM story');
			$story = mysqli_fetch_all($result['result']);
			
			$storyObj = new Story($story[0], $story[1], $story[2], $story[3], $story[4], $story[5], $story[6], $story[7], $story[8], $story[9]); 
				
			return $storyObj;
		}
	}
?>