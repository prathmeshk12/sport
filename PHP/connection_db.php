<?php
$servername = "apache.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="sportclub";
$conn = mysqli_connect($servername, $username, $password,$database);

?>