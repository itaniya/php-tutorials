<?php

include_once('db.php');

$sth = $connection->prepare("SELECT * FROM form"); 

// $sth->setFetchMode(PDO:: FETCH_OBJ); 
if($sth->execute()){
    echo "LOGGED IN";	
    }else{
        echo "Something Went Wrong!";
    }

// while($row = $sth->fetch()){

// //echo $row['first_name']."<br/>"; //Normal Style
// echo $row->user_email."<br/>"; //OOP Style
// }
