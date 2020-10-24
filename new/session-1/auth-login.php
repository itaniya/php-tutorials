<?php

session_start();

if(ISSET($_REQUEST['submit'])){

    $u_username = $_REQUEST['username'];
    $u_password = $_REQUEST['password'];
    
    $s_uname = $_SESSION['uname'];
    $s_pwd = $_SESSION['pwd'];
    
    if($u_username == $s_uname && $u_password == $s_pwd) {
        echo('Successfully loggedin');
        echo("<a href='logout.php'> Logout</a>");
    }else{
        echo('Invalid login ID or Password');
        // header("Location: home.php");
        header("refresh:5; url= home.php");
    }
}