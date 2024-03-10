<?php
$servername = "apache.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="sportclub";
$con = new mysqli($servername, $username, $password, $database);
        
?>