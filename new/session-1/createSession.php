<?php

session_start();

$_SESSION["uname"] = "admin@domain.com";
$_SESSION["pwd"] = "123456";

header("Location: home.php");