<?php include_once("db.php") ;?>

<!doctype>
<html>
<head>
<title>SELECT QUERY IN  PHP</title>

</head>
<body>
<?php 

$sql_query = mysqli_query($db, "SELECT * FROM employees");
// $sql_query = mysqli_query($db, "SELECT * FROM employees LIMIT 5");
while($result = mysqli_fetch_array($sql_query)){
	//print_r($result);
    echo ('<h3>'. $result['first_name'].' '. $result['last_name'] .'<h3>');
}

?>
</body>
</html>