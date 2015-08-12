<?php
	include(ROOT_PATH . '/application/story.php');
	include(ROOT_PATH . '/application/services/database.php');

	class StoryModel {
		private $db;

		public function __construct() {
			$this->db = new Database();
			$this->db->connect();
		}

		// returns an array of story objects
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

		public function getStoriesBySubSSO($subSSO) {
			$result = $this->db->query("select * FROM story WHERE SubSSO = '" . $subSSO . "'");
			$stories = mysqli_fetch_all($result['result']);

			$storyList = array();
			foreach($stories as $story) {
				$storyObj = new Story($story[0], $story[1], $story[2], $story[3], $story[4], $story[5], $story[6], $story[7], $story[8], $story[9]); 
				array_push($storyList, $storyObj);
			}
			return $storyList;
		}

		public function getStoriesByTargetSSO($targetSSO) {
			$result = $this->db->query("select * FROM story WHERE TargetSSO = '" . $targetSSO . "'");
			$stories = mysqli_fetch_all($result['result']);

			$storyList = array();
			foreach($stories as $story) {
				$storyObj = new Story($story[0], $story[1], $story[2], $story[3], $story[4], $story[5], $story[6], $story[7], $story[8], $story[9]); 
				array_push($storyList, $storyObj);
			}
			return $storyList;
		}

		// returns a story object that correpsonds to that ID
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

		// approves a story
		public function setApproved($storyID) {
			$result = $this->db->query("UPDATE story SET Status='approved' WHERE StoryID = " . $storyID . "");
			//echo count()
			if(count($result['result']) == 1) {
				return true;
			} else {
				return false;
			}
		}

		// denies a story
		public function setDenied($storyID) {
			$result = $this->db->query("UPDATE story SET Status='denied' WHERE StoryID = " . $storyID . "");
			//echo count()
			if(count($result['result']) == 1) {
				return true;
			} else {
				return false;
			}
		}

		// creates a story in the DB
		public function createStory($subSSO, $targetSSO, $story, $subDate, $value1, $value2, $value3) {
			$result = $this->db->query("INSERT INTO story (SubSSO, TargetSSO, Story, SubDate, Value_1, Value_2, Value_3) VALUES('" . $subSSO . 
				"','" . $targetSSO . "','" . $story . "','". $subDate . "','". $value1 . "','". $value2 . "','". $value3 . "')");
			//echo count()
			if(count($result['result']) == 1) {
				return true;
			} else {
				return false;
			}
		}

		// votes yes on a story
		public function voteYes($storyID, $sso) {
			$this->vote($storyID, $sso, 1);
		}

		// votes yes on a story
		public function voteNo($storyID, $sso) {
			$this->vote($storyID, $sso, 0);
		}

		// creates a vote for a reviewer on a story
		// vote is binary, 1 for yes, 0 for no
		public function vote($storyID, $sso, $vote) {
			$result = $this->db->query("INSERT INTO vote VALUES(" . $storyID . 
				",'" . $sso . "'," . $vote . ")");
			//echo count()
			if(count($result['result']) == 1) {
				return true;
			} else {
				return false;
			}
		}

		//returns a two element array with the first element being number of yes votes, and second element being total votes
		public function getVotes($storyID) {
			$result = $this->db->query("select * FROM vote WHERE StoryID = " . $storyID . "");
			$votes = mysqli_fetch_all($result['result']);

			$totalVotes = 0;
			$yesVotes = 0;
			foreach($votes as $vote) {
				$totalVotes++;
				if($vote[2] == 1) {
					$yesVotes++;
				}
			}
			$voteList = array($yesVotes, $totalVotes);
			return $voteList;
		}
	}
?>