<?php
$servername = "localhost";
$username = "admin";
$password = "test";
$database = "Mariadb";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
echo("połączono z bazą");
}
?>