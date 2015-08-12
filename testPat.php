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
include(ROOT_PATH . '/application/storyModel.php');
//include(ROOT_PATH . '/application/userModel.php');

$sModel = new StoryModel();
$sModel->setApvDate(1, "08/12/2015");
$success = $sModel->setStatus(1, "Approved");
if($success) {
	echo "Status Update Successful";
} else {
	echo "Status Update Failed";
}
$rec = $sModel->getStoryByID(1);
/*
$sList = $sModel->getStoryList();
foreach($sList as $rec) {*/
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
	echo "<br/>";
//}

	
?>