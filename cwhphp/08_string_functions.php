<?php
$name = "Harry is a good boy";
// echo strlen($name);
echo"The length "."of string is ". strlen($name);
echo"<br>";
echo str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
echo strrpos($name, "is");
echo"<br>";
echo str_replace("Harry", "Rohan", "$name");
echo"<br>";
echo str_repeat($name,4);
echo"<br>";
echo"<pre>";
echo rtrim("      this is a good boy    ");
echo"<br>";
echo ltrim("      this is a good boy    ");
echo"</pre>";

?>
