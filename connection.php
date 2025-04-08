<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cm-academy";


$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error)
    echo "Error!";

?>