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
    <div id="quadrado">
        <div class="logo"></div>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="votar.php">
            <label>Matrícula: </label><br>
            <input type="text" name="matricula" placeholder="Sem pontuação! Ex: 2021321" maxlength="7"><br>
            <label>Em que partido deseja votar?</label><br>
            <input type="checkbox" name="voto" value="1"><br>
            <label for="chapa1">Votar na Chapa 1</label><br>
            <input type="checkbox" name="voto" value="2"><br>
            <label for="chapa2">Votar na Chapa 2</label><br>
            <input type="checkbox" name="voto" value="3"><br>
            <label for="chapa3">Votar na Chapa 3</label><br>
            <button type="submit">Votar</button>
        </form>
            
    </div>
<footer>
    <div class="creditos">
        <div class="popup" onclick="deuClique()">Quer descobrir quem fez a arte? Clica!
        <span class="popuptext" id="meuPopup"><a id="linkcredito" href="https://instagram.com/aluzarts/" target="__blank"> @aluzarts</span>
      </div>
    </footer>
</div>
</body>
</html>