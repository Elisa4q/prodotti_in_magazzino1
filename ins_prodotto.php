<!DOCTYPE html>
<html lang = "it">
    <head>
        <meta charset = "utf-8">
        <title>INSERIMENTO NUOVO PRODOTTO</title>
    </head>
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "prodotti_in_magazzino1";
            
            //connessione al server
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn)
        {
            die("ERRORE NELLA CONNESSIONE");
            exit();
        
        }
       //recupero dei dati dal form.html
        $codice_prodotto = $_COOKIE['codice_prodotto'];
        $descrizione = $_COOKIE['descrizione'];
        $prezzo_unitario = $_COOKIE['prezzo_unitario'];
        $quantita = $_COOKIE['quantita'];

        $query = "INSERT INTO prodotti(codice_prodotto, descrizione, prezzo_unitario, quantita) VALUES
        ('$codice_prodotto', '$descrizione', $prezzo_unitario, $quantita)";

        $risultato = mysqli_real_query($conn, $query);
        $righe = mysqli_affected_rows($conn);

        if(!$risultato) {
            print("Errore nell'inserimento");
            print("$codice_prodotto, $descrizione, $prezzo_unitario, $quantita");
            print($query);
        } else {
            print("Registrazione avvenuta con successo<br>
                    sono state inserite $righe");
        }

mysqli_close($conn);
?>
</body>
</hmtl>