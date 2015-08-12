<?php
	include(ROOT_PATH . '/application/story.php');
	include(ROOT_PATH . '/application/services/database.php');

	class StoryModel {
		private $db;

		public function __construct() {
			$this->db = new Database();
			$this->db->connect();
		}

		public function getStoryList() {
			//$db = new Database();
			//$db->connect();
			//global $db;
			$result = $this->db->query('select * FROM story');
			$stories = mysqli_fetch_all($result['result']);

			$storyList = array();
			foreach($stories as $story) {
				$storyObj = new Story($story[0], $story[1], $story[2], $story[3], $story[4], $story[5], $story[6], $story[7], $story[8], $story[9]); 
				array_push($storyList, $storyObj);
			}
			return $storyList;
		}

		public function getStoryByID($storyID) {
			//$db = new Database();
			//$db->connect();
			$result = $this->db->query("select * FROM story WHERE StoryID = " . $storyID . "");
			$stories = mysqli_fetch_all($result['result']);
			$story = $stories[0];
			
			$storyObj = new Story($story[0], $story[1], $story[2], $story[3], $story[4], $story[5], $story[6], $story[7], $story[8], $story[9]); 
				
			return $storyObj;
		}

		// Date in MM/DD/YYYY format because America
		public function setApvDate($storyID, $date) {
			$result = $this->db->query("UPDATE story SET ApvDate='" . $date . "' WHERE StoryID = " . $storyID . "");
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}

		public function setStatus($storyID, $status) {
			$result = $this->db->query("UPDATE story SET Status='" . $status . "' WHERE StoryID = " . $storyID . "");
			//echo $result;
			if($result == 1) {
				return true;
			} else {
				return false;
			}
		}
	}
?>