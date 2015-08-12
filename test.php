<?php
include('init.php');
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
//var_dump($array);

?>