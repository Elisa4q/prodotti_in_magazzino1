<!DOCTYPE html>
<html lang = "it">
    <head></head>
    <body>
      <p style : "center"><strong>Registrati</strong><br><br><br>
<?php
$hostname = "localhost";
$username = "root";
$password  = "";
$dbname = "prodotti_in_magazzino1";

print"<form method='post' action = 'ins_utente.php'>";
print"Nome: <input type = 'text' name = 'Nome'><br><br>";
print"Cognome: <input type = 'text' name = 'Cognome'><br><br>";
print"Username: <input type = 'text' name = 'Username'><br><br>";
print"Password: <input type = 'text' name = 'Password'><br><br>";
print"<input type = 'submit' value = 'Registrati'> &nbsp; &nbsp; &nbsp;";
print"<input type = 'reset' value = 'Reset'>";
print"</form>";


?>
</body>
</hmtl>