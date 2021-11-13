<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições - Grêmio 2022</title>
</head>
<body>
<section>
    <form method="POST" action="votar.php">
        <div class="logo"></div>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div class="opcoesform">
            <label for="matricula">Matrícula: <abbr title="Obrigatório">*</abbr></label>
            <input id="matricula" type="text" name="matricula" maxlength="7" placeholder="Sem pontuação! Ex: 2021321" size="21"><br><br>
            <label for="chapa1">Votar na Chapa Um: </label>
            <input id="chapa1" type="checkbox" name="chapa1" value="1"><br><br>
            <label for="chapa2">Votar na Chapa Dois: </label>
            <input id="chapa2" type="checkbox" name="chapa2" value="2"><br><br>
            <label for="chapa3">Votar na Chapa Três: </label>
            <input id="chapa3" type="checkbox" name="chapa3" value="3"><br>
            <button class="button__votar" type="submit">Votar</button>
        </div>
    </form>
</section>
<footer>
    <div class="creditos">
        <div class="popup" onclick="deuClique()">Quer descobrir quem fez a arte? Clica!
        <span class="popuptext" id="meuPopup"><a id="linkcredito" href="https://instagram.com/aluzarts/" target="__blank"> @aluzarts</span>
      </div>
    </footer>
</div>
</body>
</html>