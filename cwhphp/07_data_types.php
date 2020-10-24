<?php
/*
1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.NULL
*/

// String- Sequence od characters
$name = "Harry";
$friend = "Rohan";
echo"$name is a friend of $friend";

// Integers- Non-decimal numbers
$income = 3000;
$debt = -538;
echo"$income";
echo"$debt";

// Float- decimal point number
$income =344.5;
$debt = -45.5;
echo"$income <br>"; 
echo"$debt";
echo"<br>";


// Boolean - Can be either true or false
$x = true;
$its_frirnd = false;
echo var_dump($x);
echo"<br>";
echo var_dump($its_frirnd);
echo"<br>";

// Object - Instances of classes
// Employee is a class ---> harry can be an object


// Array - used to store multiple values in a single variable
$friends = array("rohan","Shubham","skillf","larry");
echo  var_dump($friends);
echo"<br>";
echo count($friends);
echo"<br>";
echo $friends[0];
echo"<br>";
echo $friends[1];
echo"<br>";
echo $friends[2];
echo"<br>";
echo $friends[3];
echo"<br>";
// echo $friends[4]; //will throw an error as the size of array is 4
echo"<br>";

// NULL
$name = NULL;
echo var_dump($name);


?>