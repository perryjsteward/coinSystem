<?php
/*include('init.php');
include(ROOT_PATH . '/application/services/database.php');

$db = new Database();
$db->connect();

$result = $db->query('select * FROM personal');
$array = mysqli_fetch_all($result['result']);

foreach($array as $rec) {
	echo $rec[0];
	echo " ";
	echo $rec[1];
	echo " ";
	echo $rec[2];
	echo " ";
	echo $rec[3];
	echo " ";
	echo $rec[4];
	echo " ";
	echo $rec[5];
	echo " ";
	echo $rec[6];
	echo " ";
	echo $rec[7];
	echo " ";
	echo $rec[8];
	echo "<br/>";
}
//var_dump($array);*/

include('init.php');
//include(ROOT_PATH . '/application/models/storyModel.php');
//include(ROOT_PATH . '/application/userModel.php');

$sModel = new StoryModel();
//$sModel->setApvDate(1, "08/12/2015");
//$sModel->createStory("212414600", "200020088", "A gift to my plus 1", "08/13/2015", "Integrity", "Passion", "Humility");
//$success = $sModel->setStatus(1, "Approved");
/*if($success) {
	echo "Status Update Successful";
} else {
	echo "Status Update Failed";
}
echo "<br/>";*/
//$rec = $sModel->getStoryByID(3);

//test for creating vote
//$sModel->voteNo(1, "212414600");
/*$voteList = $sModel->getVotes(1);
echo "Yes Votes: " . $voteList[0];
echo "<br/>";
echo "Total Votes: " . $voteList[1];*/
//$sModel->voteYes(1, "212414600");

$sList = $sModel->getStoriesNotVotedOn("212414600");
foreach($sList as $rec) {
	echo $rec->getTitle();
	echo " ";
	echo $rec->getTargetName();
	echo " ";
	echo $rec->getSubName();
	echo " ";
	echo $rec->getStoryID();
	echo " ";
	echo $rec->getSubSSO();
	echo " ";
	echo $rec->getTargetSSO();
	echo " ";
	echo $rec->getStory();
	echo " ";
	echo $rec->getSubDate();
	echo " ";
	echo $rec->getApvDate();
	echo " ";
	echo $rec->getStatus();
	echo " ";
	echo $rec->getValue1();
	echo " ";
	echo $rec->getValue2();
	echo " ";
	echo $rec->getValue3();
	echo " ";
	
	echo "<br/>";
}

	
?>