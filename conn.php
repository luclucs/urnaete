<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votos";

// cria conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// verifica se funciona
if (!$conn) {
  die("Conexão falha: " . mysqli_connect_error());
}
echo "Conectado ao banco de dados! <br>";
?>