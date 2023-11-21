<?php
require_once('config.php');
$username = "admin";
$password = "test";
$sql = "INSERT INTO users (login, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) 
{
    echo "Użytkownik został dodany pomyślnie.";
} 
else 
{
    echo "Błąd podczas dodawania użytkownika: " . $conn->error;
}
$conn->close();
?>