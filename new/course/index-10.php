<?php ob_start(); ?> 
<!-- Sometimes it will show error link header already send then ob_start(); helps -->

<!doctype>
<html>
<head>
<title>Page Redirecting in PHP</title>
</head>
<body>

<?php

//header("Location: http://itsmeshubham.com/");
// header("Location: index-0.php");

header("refresh:15; url= index-0.php");
//header("refresh:5; url= http://itsmeshubham.com/");

?>

</body>
</html>