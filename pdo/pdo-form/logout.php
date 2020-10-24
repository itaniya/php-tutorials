<?php

try{
include_once('db.php');

$sql_query = ("DELETE FROM form WHERE user_pwd = $_REQUEST['userpwd']");

$connection->exec($sql_query);
echo "Record Deleted";

//try end
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}//catch end

?>