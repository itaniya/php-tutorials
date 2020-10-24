<?php
include_once('select.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .container {
            border: 2px solid black;
            display: block;
            width: 300px;
            margin: auto;
            height: 300px;
        }

        h2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            display: block;
            width: 200px;
            margin: auto;
        }
        input{
            margin-bottom: 2px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h2>Log In</h2>
        </div>
        <div class="main">
            <form action="" method="get">
                <input type="email" name="useremail" placeholder="Email">
                <input type="password" name="userpwd" placeholder="Password">
                <button name="submit" value="submit">Submit</button>
                <a href="logout.php">Logout</a>
            </form>
        </div>
    </div>
</body>

</html>