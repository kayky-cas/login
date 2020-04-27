function pegarSessao() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var dadosL = JSON.parse(this.responseText);
            console.log(dadosL);
            corpo = document.getElementById('corpo');   
            if(dadosL[0]=='err'){
                corpo.innerHTML = corpo.innerHTML + "<h1>Usuário ou senha incorretos</h1>"
            } 
            else if (dadosL[0]!="") {
                corpo.innerHTML = "<h1>Oi "+dadosL[2]+" como foi o seu dia?</h1><br>    <form method = 'post'><input type= 'submit' name = 'singout' value='sair'></form>";

            }
            
        }
    }
    xhttp.open("GET", "./php/login.php", true);
    xhttp.send();
}
pegarSessao();
