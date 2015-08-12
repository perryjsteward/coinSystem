<?php
	class User {
		private $SSO;
		private $LName;
		private $FName;
		private $Country;
		private $Business;
		private $Email;
		private $RoleOrRoation;
		private $Permissions;
		private $Admin;
		private $Password;

		public function __construct($SSO, $LName, $FName, $Country, $Business, $Email, $RoleOrRoation, $Permissions, $Admin, $Password){
			$this->SSO = $SSO;
			$this->LName = $LName;
			$this->FName = $FName;
			$this->Country = $Country;
			$this->Business = $Business;
			$this->Email = $Email;
			$this->RoleOrRoation = $RoleOrRoation;
			$this->Permissions = $Permissions;
			$this->Admin = $Admin;
			$this->Password = $Password;
		}

		public function getSSO() {
			return $this->SSO;
		}

		public function getLName() {
			return $this->LName;
		}
		public function getFName() {
			return $this->FName;
		}
		public function getCountry() {
			return $this->Country;
		}
		public function getBusiness() {
			return $this->Business;
		}
		public function getEmail() {
			return $this->Email;
		}
		public function getRoleOrRotation() {
			return $this->RoleOrRoation;
		}
		public function getPermissions() {
			return $this->Permissions;
		}
		public function getAdmin() {
			return $this->Admin;
		}
		public function getPassword() {
			return $this->Password;
		}
	}//end constructor
?>