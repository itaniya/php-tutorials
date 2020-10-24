<?php
// Operators in PHP
/*
1.Airthmetic Operators
2.Assignment Operators
3.Comparision Operators
4.Logical Operators
*/

$a = 45;
$b = 56;
// echo $a+$b;
echo "For a+b, the result is ".($a+$b)."<br>";
echo "For a-b, the result is ".($a-$b)."<br>";
echo "For a*b, the result is ".($a*$b)."<br>";
echo "For a/b, the result is ".($a/$b)."<br>";
echo "For a%b, the result is ".($a%$b)."<br>";
echo "For a**b, the result is ".($a**$b)."<br>";

// 2.Assignment Operators
// $x = $a;
// echo"for x, the value is ". $x."<br>"; 

// $a += 6;
// echo"for a, the value is ". $a."<br>";

// $a -= 6;
// echo"for a, the value is ". $a."<br>";

// $a *= 6;
// echo"for a, the value is ". $a."<br>";

$a /= 5;
echo"for a, the value is ". $a."<br>";

$a %= 5; //$a = $a % 5 //modulas is basically the remainder
echo"for a, the value is ". $a."<br>";

// 3.Comparision Operators
$x = 6;
$y = 5;
// echo"for x==y, the result is";
// echo var_dump($x==$y);
// echo"<br>";

// echo"for x>y, the result is";
// echo var_dump($x>$y);
// echo"<br>";

// echo"for x==y, the result is";
// echo var_dump($x<$y);
// echo"<br>";

// echo"for x<>y, the result is";
// echo var_dump($x<>$y);
// echo"<br>";


// 4.Logical Operators
$m = true;
$n = true;
echo"for m and n, the result is";
echo var_dump($m and $n);
echo"<br>";

echo"for m && n, the result is";
echo var_dump($m && $n);
echo"<br>";

echo"for m or n, the result is";
echo var_dump($m or $n);
echo"<br>";

echo"for m || n, the result is";
echo var_dump($m || $n);
echo"<br>";

echo"for !m, the result is";
echo var_dump(!$m);
echo"<br>";

echo"for !n, the result is";
echo var_dump(!$n);
echo"<br>";






?>