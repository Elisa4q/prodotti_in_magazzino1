<!DOCTYPE html>
<html lang = "it">
    <head></head>
    <body>
      <p style : "center"><strong>Lista prodotti</strong><br><br><br>
<?php

if(isset($_cookie ['user'])){
    
    print "prima devi autenticarti";
    print"<br><a href = http://localhost/prodotti_in_magazzino1/eaccedi.php> Autenticazione</a>";
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
$query = "select * from prodotti order by prezzo_unitario";
$risultato = mysqli_query($conn, $query);

if(!$risultato){
    print"Errore nell'esecuzione della query SQL";
    exit();
}

$riga=mysqli_fetch_array($risultato);
if($riga){
    print "<table border = '1'>";
    print"<tr><td> CODICE </td><td> DESCRIZIONE </td><td> PREZZO </td><td> QUANTITA</td></tr>";

    while($riga){
        print "<tr><td>".$riga['codice_prodotto']. "</td>";
        print "<td>".$riga['descrizione']. "</td>";
        print "<td>".$riga['prezzo_unitario']. "</td>";
        print "<td>".$riga['quantita']. "</td></tr>";
        $riga=mysqli_fetch_array($risultato);
    }
    print "</table>";
} else{
    print "Attenzione non ci prodotti presenti";
}

mysqli_close($conn);
}




?>
</body>
</hmtl>
 