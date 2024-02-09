<?php


$conn = new mysqli('localhost','root','','test3');

if ($conn) {
	//echo "Connection successfull";
}else{
	die(mysql_errno($conn));
}

?>