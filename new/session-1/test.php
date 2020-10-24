<?php
session_start();

$s_uname = $_SESSION['uname'];
$s_pwd = $_SESSION['pwd'];


echo($s_uname);
echo('<hr>');
echo($s_pwd);