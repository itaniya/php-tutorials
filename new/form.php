<?php

// username
// useremail
// userpwd
// usermsg
// userrange
// usermusic
// usersports
// gender


if (ISSET($_REQUEST['username']) && !empty($_REQUEST['username'])){
    $usrname = $_REQUEST['username'];
    echo($usrname);
    
}else{
    echo('Please fill the username');
}

if (ISSET($_REQUEST['useremail']) && !empty($_REQUEST['useremail'])){
    $usremail = $_REQUEST['useremail'];
    echo($usremail);
    
}else{
    echo('Please fill the useremail');
}

if (ISSET($_REQUEST['userpwd']) && !empty($_REQUEST['userpwd'])){
    $usrpwd = $_REQUEST['userpwd'];
    echo($usrpwd);
    
}else{
    echo('Please fill the userpwd');
}

if (ISSET($_REQUEST['usermsg']) && !empty($_REQUEST['usermsg'])){
    $usrmsg = $_REQUEST['usermsg'];
    echo($usrmsg);
    
}else{
    echo('Please fill the usermsg');
}

if (ISSET($_REQUEST['userfile']) && !empty($_REQUEST['userfile'])){
    $usrfile = $_REQUEST['userfile'];
    echo($usrfile);
}else{
    echo('Please fill the userfile');
}

if (ISSET($_REQUEST['userrange']) && !empty($_REQUEST['userrange'])){
    $usrrange = $_REQUEST['userrange'];
    echo($usrrange);
}else{
    echo('Please fill the userrange');
}

if (ISSET($_REQUEST['usermusic']) && ISSET($_REQUEST['usersports']) && !empty($_REQUEST['usermusic']) && !empty($_REQUEST['usersports'])){
    echo('music'.'<br>');
    echo('sports');
}
elseif (ISSET($_REQUEST['usermusic']) && !empty($_REQUEST['usermusic'])){
    $usrmusic = $_REQUEST['usermusic'];
    echo('music');
}
    elseif(ISSET($_REQUEST['usersports']) && !empty($_REQUEST['usersports'])){
    $usrsports = $_REQUEST['usersports'];
    echo('sports');
    }
else{
    echo('Please fill the hobbies');
}

if (ISSET($_REQUEST['male']) && !empty($_REQUEST['male'])){
    echo('male');
}
    elseif(ISSET($_REQUEST['female']) && !empty($_REQUEST['female'])){
    echo('female');
    }
else{
    echo('Please fill the gender');
}

