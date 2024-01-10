<!DOCTYPE html>
<html lang = "it">
    <head></head>
    <body>

<p style : "center"><strong>Connnessione al database</strong><br><br><br>
<?php
$hostname = "localhost";
$username = "root";
$password  = "";
$dbname = "prodotti_in_magazzino1";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn)
    die("<br><br><strong>Errore nella connessione</strong>");
else
    print "<br><br><strong>Connessione avvenuta correttamente</strong><br><br>";

mysqli_close($conn);
print "<strong>Ora la connessione è chiusa</strong>";

?>
</body>
</html>
