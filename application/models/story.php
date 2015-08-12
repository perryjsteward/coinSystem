<?php
	class Story {
		private $storyID;
		private $subSSO;
		private $targetSSO;
		private $story;
		private $subDate;
		private $apvDate;
		private $status;
		private $value1;
		private $value2;
		private $value3;
		private $title;
		private $targetName;
		private $subName;

		public function __construct($storyID, $subSSO, $targetSSO, $story, $subDate, $apvDate, $status, $value1, $value2, $value3, $title, $targetName, $subName){
			$this->storyID = $storyID;
			$this->subSSO = $subSSO;
			$this->targetSSO = $targetSSO;
			$this->story = $story;
			$this->subDate = $subDate;
			$this->apvDate = $apvDate;
			$this->status = $status;
			$this->value1 = $value1;
			$this->value2 = $value2;
			$this->value3 = $value3;
			$this->title = $title;
			$this->targetName = $targetName;
			$this->subName = $subName;
		}

		public function getStoryID() {
			return $this->storyID;
		}

		public function getSubSSO() {
			return $this->subSSO;
		}
		public function getTargetSSO() {
			return $this->targetSSO;
		}
		public function getStory() {
			return $this->story;
		}
		public function getSubDate() {
			return $this->subDate;
		}
		public function getApvDate() {
			return $this->apvDate;
		}
		public function getStatus() {
			return $this->status;
		}
		public function getValue1() {
			return $this->value1;
		}
		public function getValue2() {
			return $this->value2;
		}
		public function getValue3() {
			return $this->value3;
		}
		public function getTitle() {
			return $this->title;
		}
		public function getTargetName() {
			return $this->targetName;
		}
		public function getSubName() {
			return $this->subName;
		}
	}//end constructor
?>