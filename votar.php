<?php
session_start();
include_once ("conn.php");
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$voto = filter_input(INPUT_POST, 'chapa', FILTER_SANITIZE_NUMBER_INT);

if (!empty($voto) && !empty($matricula)){
    $comando = "INSERT INTO votos_chapa (matricula, voto, hora) VALUES ('$matricula', '$voto', NOW())";
    $sql = mysqli_query($conn, $comando);
} else {
    $_SESSION['msg'] = "O voto não foi computado. Faltam informações!";
}
if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "O voto foi computado com sucesso!";
    header("location: index.php");
    die();
} else {
    header("location: index.php");
    die();
}
?>