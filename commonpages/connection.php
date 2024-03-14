<?php
$con = new mysqli(
    "apache001.mysql.database.azure.com",
    $_ENV['AZURE_MYSQL_USERNAME'],
    $_ENV['AZURE_MYSQL_PASSWORD'],
    "sportclub"
);
?>