<?php
$servername = "localhost";
$username = "root";
$password = "tiger";
$db_name = "vote";

$dbh = mysqli_connect($servername, $username, $password, $db_name)
or die("Connection failed: ");
?>
