<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "spmb";

// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db($database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
?>