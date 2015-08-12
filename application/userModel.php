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
			//$db = new Database();
			//$db->connect();
			$result = $this->db->query("select * FROM personal WHERE SSO = " . $SSO . "");
			$users = mysqli_fetch_all($result['result']);
			$user = $users[0];
			
			$userObj = new user($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $user[6], $user[7], $user[8], $user[9]); 
				
			return $userObj;
		}
		
		public function setUserCountry($SSO, $Country ) {
			$result = $this->db->query("UPDATE personal SET Country='" . $Country . "' WHERE SSO = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}
		
		public function setUserBusiness($SSO, $Business ) {
			$result = $this->db->query("UPDATE personal SET Business='" . $Business . "' WHERE SSO = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}	
			
		public function setUserEmail($SSO, $Email ) {
			$result = $this->db->query("UPDATE personal SET Email='" . $Email . "' WHERE SSO = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}	
		
		
		public function setUserRoleOrRoatation($SSO, $RoleOrRotation ) {
			$result = $this->db->query("UPDATE personal SET RoileOrRoatation='" . $RoleOrRotation . "' WHERE SSO# = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}

		
		public function setUserPermissions($SSO, $Permissions ) {
			$result = $this->db->query("UPDATE personal SET Permissions='" . $Permissions . "' WHERE SSO# = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}
		
		public function setUserAdmin($SSO, $Admin ) {
			$result = $this->db->query("UPDATE personal SET Admin='" . $Admin . "' WHERE SSO# = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}
		
		public function setUserPassword($SSO, $Password ) {
			$result = $this->db->query("UPDATE personal SET Password='" . $Password . "' WHERE SSO# = " . $SSO . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}
			
		
	
	}
?>