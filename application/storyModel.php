<?php
	include(ROOT_PATH . '/application/story.php');
	include(ROOT_PATH . '/application/services/database.php');

	class StoryModel {
		private $db;

		public function __construct() {
			$db = new Database();
			$db->connect();
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

		//not working yet
		public function getStoryByID($storyID) {
			$db = new Database();
			$db->connect();
			$result = $db->query('select * FROM story');
			$story = mysqli_fetch_all($result['result']);
			
			$storyObj = new Story($story[0], $story[1], $story[2], $story[3], $story[4], $story[5], $story[6], $story[7], $story[8], $story[9]); 
				
			return $storyObj;
		}
	}
?>