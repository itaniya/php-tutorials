<!doctype>
<html>
<head>
<title>Explode Function IN  PHP</title>
</head>
<body>
<?php

// png
// jpeg
// jpg

$file_name = "image.png";
$file_type = EXPLODE(".", $file_name);
print_r($file_type);
?>
</body>
</html>