
<?php
try{
include_once('db.php');

if(ISSET($_REQUEST['submit'])){

    $u_email = $_REQUEST['useremail'];
    $u_pwd = $_REQUEST['userpwd'];


$sth = $connection->prepare("INSERT INTO form (user_email, user_pwd) VALUES (:email, :pwd)");

$sth->bindParam(':email', $u_email);
$sth->bindParam(':pwd', $u_pwd);


if($sth->execute()){
echo "Data Inserted";	
}else{
	echo "Something Went Wrong!";
}
}

//try end
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}//catch end


?>