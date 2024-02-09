<!DOCTYPE html>
<html lang = "it">
    <head></head>
    <body>
      <p style : "center"><strong>Lista utenti</strong><br><br><br>
<?php

if(isset($_cookie ['user'])){
    
    print 'devi prima autenticarti';
    print"<br><a href = http://localhost/prodotti_in_magazzino1/accedi.php> Autenticazione</a>";
} else {
$hostname = "localhost";
$username = "root";
$password  = "";
$dbname = "prodotti_in_magazzino1";


$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    die("<br><br><strong>Errore nella connessione</strong>");
    exit();
}
$query = "select * from utenti order by Nome";
$risultato = mysqli_query($conn, $query);

if(!$risultato){
    print"Errore nell'esecuzione della query SQL";
    exit();
}

$riga=mysqli_fetch_array($risultato);
if($riga){
    print "<table border = '1'>";
    print"<tr><td> Nome </td><td> Cognome </td><td> Username </td><td> Password</td></tr>";

    while($riga){
        print "<tr><td>".$riga['Nome']. "</td>";
        print "<td>".$riga['Cognome']. "</td>";
        print "<td>".$riga['Username']. "</td>";
        print "<td>".$riga['Password']. "</td></tr>";
        $riga=mysqli_fetch_array($risultato);
    }
    print "</table>";
} else{
    print "Attenzione utente non trovato";
}
mysqli_close($conn);
    
}
?>
</body>
</hmtl>
 