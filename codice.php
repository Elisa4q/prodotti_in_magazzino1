<!DOCTYPE html>
<html>
<head></head>
<body> 
  <?php
  $hostname = "localhost";
  $username = "root";
  $password= "";
  $dbname = "prodotti_in_magazzino1";

//connessione al server sql
$conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    die("ERRORE NELLA CONNESSIONE");
    exit();
  }
//recupera i dati dal form html

$codice_prodotto = $_POST['codice_prodotto'];
$query = "select * from prodotti where codice_prodotto = $codice_prodotto";
$risultato = mysqli_query($conn, $query);
  if(!$risultato)
  {
    print "ERRORE NEL COMANDO";
    exit();
  }
    $riga = mysqli_fetch_array($risultato);
    if($riga)
    {
        print "descrizione: ".$riga['descrizione']. "<br>";
        print "prezzo_unitario: ".$riga['prezzo_unitario']."<br>";
        print  "quantita: ".$riga['quantita']. "<br>";
      }
          else{
            print "ATTENZIONE CODICE PRODOTTO : $codice_prodotto NON E' PRESENTE ";
          }
        mysqli_close($conn);
?>
</body>
</hmtl>
  
