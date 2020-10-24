<?php
$arr = array("harry","rohan","taniya","shivam");
for ($i=0; $i < count($arr) ; $i++) { 
    echo $arr[$i];
    echo"<br>";
}

// Better way to do this - foreach loop
foreach ($arr as $value) {
    echo "$value<br>";
}
?>