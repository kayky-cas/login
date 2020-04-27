<?php
    session_start();
    if (isset($_POST['singout'])) {
        session_destroy();
    }
?>
<html>
    <head>
    </head>
    <body>
        
        <div id = "corpo">
            <header></header>
            <form action="./php/loginVer.php" method="post">
            
                <div class = "input"><input type="email" name="email"></div>
                <div class = "input"><input type="password" name="senha"></div>
                
                <div id = "enviarInput"><input type="submit"></div>
            
            </form>
            <footer></footer>
        </div>
        <script src="./scripts/main.js">
        </script>
    </body>

</html>