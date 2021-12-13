<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições - Grêmio 2022</title>
</head>
<body>
    <header>
    <img src="./imagens/logoete.png" alt="Escola Técnica Estadual">
    </header>
<section>
    <form method="POST" action="votar.php">
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <fieldset>
            <legend>Em que partido deseja votar?</legend>
            <label class="labelform" for="matricula">Matrícula: <abbr title="Obrigatório">*</abbr><input id="matricula" type="text" name="matricula" maxlength="7" placeholder="Sem pontuação! Ex: 2021321" size="21" required></label>
            <label class="labelform" for="chapa1">Votar na Chapa Um: <input id="chapa1" type="radio" name="chapa" value="1"></label>
            <label class="labelform" for="chapa2">Votar na Chapa Dois: <input id="chapa2" type="radio" name="chapa" value="2"></label>
            <label class="labelform" for="chapa3">Votar na Chapa Três: <input id="chapa3" type="radio" name="chapa" value="3"></label>
            <button class="button__votar" type="submit">Votar</button>
    </fieldset>
    </form>
</section>
<footer>
    <p class="copyright"><a href="https://github.com/luclucs" target="_blank" rel="noopener noreferrer">luclucs<br><br><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg></a></p>
    <section>
        <div class="popup" onclick="deuClique()"><p>Quer descobrir quem fez a arte? Clica!</p>
        <span class="popuptext" id="meuPopup"><a id="linkcredito" href="https://instagram.com/aluzarts/" target="__blank"> @aluzarts</span>
      </div>
    </section>
</footer>
</body>
</html>