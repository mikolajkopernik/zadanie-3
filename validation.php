<?php
require_once('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz dane z formularza
    $Login = $_POST["login"];
    $Haslo = $_POST["password"];
    // Przygotuj zapytanie SQL
    $sql = "SELECT * FROM users WHERE login = '$Login' AND password = '$Haslo'";
    $result = $conn->query($sql);
    // Sprawdź, czy wynik zapytania zawiera dokładnie jeden rekord (użytkownik)
    if ($result->num_rows == 1) {
        echo "<p>Poprawne logowanie!</p>";    
    }
    else
    {
        echo "<p>Błędny login lub hasło. Spróbuj ponownie.</p>";
    }
}

$conn->close();
?>