<?php
$servername = "apache.mysql.database.azure.com";
$username = $_ENV['AZURE_MYSQL_USERNAME'];
$password = $_ENV['AZURE_MYSQL_PASSWORD'];
$database="sportclub";
$con = new mysqli($servername, $username, $password, $database);

?>