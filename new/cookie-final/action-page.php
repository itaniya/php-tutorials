<?php


if(ISSET($_REQUEST['submit'])){
    $uname = $_REQUEST['username'];
    $upwd = $_REQUEST['userpwd'];
  
    $c_uname = $_COOKIE['username'];
    $c_upwd = $_COOKIE['password'];

    if($uname == $c_uname && $upwd == $c_upwd){
        echo 'Successfully loggedin';
    
       // setcookie('successLogin', 'canAccessWebsite')
    }else{
        echo 'Incorrect userID or Password';
    }

}   else {
    echo 'Invalid form input';
} 
