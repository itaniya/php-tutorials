<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    This is our first php website
    <br>
    <?php
    define('a',5);
    echo"Hello world and this is printed using php<br>";
    echo a;

    // Iteration in an array using while loop
    $name = array("h","n","f","r");
    $a = 0;
    while($a<count($name)){
        echo "<br>the value of a is: ". ($name[$a]);
        $a++;
    }
    


    // Funtions
    function print5(){       //defination
        echo"<br>Five";      //action
    }
    print5();                //calling

    function print_n($number){   
        echo "<br>$number"; 
    }
    print_n(45);


        ?>

    

    </div>


</body>
</html>