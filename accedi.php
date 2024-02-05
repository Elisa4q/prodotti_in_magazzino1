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


print"<form method='post' action = 'login.php'>";
print"Username: <input type = 'text' name = 'Username'><br><br>";
print"Password: <input type = 'text' name = 'Password'><br><br>";
print"<input type = 'submit' value = 'Accedi'> &nbsp; &nbsp; &nbsp;";
print"<input type = 'reset' value = 'Reset'>";
print"</form>";


?>
</body>
</hmtl>
 


 




