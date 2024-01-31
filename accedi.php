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



 setcookie("Username", $Username, time()+60);

 




