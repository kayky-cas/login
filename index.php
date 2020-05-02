<?php
    session_start();
    if (isset($_POST['singout'])) {
        session_destroy();
    }
?>
<html lang="pt-br">
    <head>
        <title>TELA DE LOGIN</title>
        <link rel="stylesheet" href="./css/main.css">
        <meta name="author" content="Kayky Belleboni Casagrande">
        <meta name="description" content="Ferramenta de Login">
        <meta name="keywords" content="login">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="icon" href="./img/logos/logo32.png" sizes="32x32">
    </head>
    <body>
        <div class = "centralizar">
            <div id = "corpo">
                <header><h1 id="titulo">TELA DE LOGIN</h1></header>
                <div id = "formDiv">
                    <form action="./php/loginVer.php" method ="post">
                        <input type="email" name="email" placeholder="EMAIL">
                        <input type="password" name="senha" placeholder="SENHA">
                        <input type="submit" value="ENTRAR">
                    </form>  
                </div>
                
                <button id="registrar" value = "registro" onclick = "telaRegistro(this.value)">REGISTRAR-SE</button>
                <footer></footer>
            </div>
        </div>
          

        <script src="./scripts/main.js"></script>
    </body>

</html>