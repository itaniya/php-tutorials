<?php

include_once('db.php');

$sth = $connection->prepare("SELECT * FROM employees"); 

$sth->setFetchMode(PDO:: FETCH_OBJ); 

$sth->execute();

while($row = $sth->fetch()){

//echo $row['first_name']."<br/>"; //Normal Style
echo $row->first_name."<br/>"; //OOP Style
}
