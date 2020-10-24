<?php

// Error Handling

function num($input){
    if ($input > 2){
        throw new Exception("Value is > 2");
    }
    return true;
}


try {
 num(3);
}


catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}



?>