<?php


$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];


$connection = mysqli_connect('localhost', 'root', '', 'test') or die('Connection faild to Database');

$sth = "UPDATE students SET first_name='{$first_name}'&& last_name='{$last_name}' WHERE roll_no={$roll_no}";

if (mysqli_query($connection, $sth)){
    echo 1;
}else {
    echo 0;
}

?>