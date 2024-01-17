<!DOCTYPE html>
<html lang = "it">
    <head>
        <meta charset = "utf-8">
        <title>INSERIMENTO NUOVO PRODOTTO</title>
    </head>
    <body>
        <p>Inserisci i dati del prodotto:</p>
        <form method = "post" action = "form.html">
            codice_prodotto: <input type = "text" value = "inserisci il codice del prodotto" name = "codice_prodotto"> <br><br>
            descrizione: <input type = "text"  value = "inserisci la descrizione del prodotto" name = "descrizione"> <br><br>
            prezzo_unitario: <input type = "decimal"  value = "inserisci il prezzo unitario" name = "prezzo_unitario"> <br><br>
            quantita: <input type = "number"  value = "inserisci la quantita" name = "quantita"> <br><br>
            <br><br>

            <input type = "submit" value = "Inserisci"> &nbsp; &nbsp; &nbsp;
            <input type = "reset" value = "Annulla">

        </form>
    </body>
</html>