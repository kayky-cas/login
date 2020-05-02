function telaRegistro(tipo) {
    var formulario = document.getElementsByTagName("form")[0];
    var registrar = document.getElementById("registrar");
    var titulo = document.getElementById("titulo");
    var tituloHead = document.getElementsByTagName("title")[0];
        
    if (tipo == "registro"){
        formulario.innerHTML = '<input type="text" name = "nome" placeholder = "NOME COMPLETO" id="nomeInput"><input type="email" name="email" placeholder="EMAIL"><input type="password" name="senha" placeholder="SENHA"><input type="submit" value="REGISTRAR-SE">';
        registrar.innerHTML = "ENTRAR";
        registrar.value = "login";
        titulo.innerHTML = "TELA DE REGISTRO";
        tituloHead.innerHTML = "TELA DE REGISTRO";
        formulario.action = "./php/loginRegistro.php";
        document.getElementById("nomeInput").pattern = "[A-Z][a-záàãâéèêíìóòÔõúùû]+( [A-Z][a-záàãâéèêíìóòÔõúùû]+)+";
    }
    else{
        formulario.innerHTML = '<input type="email" name="email" placeholder="EMAIL"><input type="password" name="senha" placeholder="SENHA"><input type="submit" value="ENTRAR">';
        registrar.innerHTML = "REGISTRAR-SE";
        registrar.value = "registro";
        titulo.innerHTML = "TELA DE LOGIN";
        formulario.action = "./php/loginVer.php";
        tituloHead.innerHTML = "TELA DE LOGIN";
    }
    
}
function pegarSessao() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var dadosL = JSON.parse(this.responseText);
            corpo = document.getElementById('formDiv');   
            if(dadosL[0]=='err01'||dadosL[0]=='err02'){
                alert("Usuário ou senhas incorretos!")
            }
            else if(dadosL[0]=="err03"){
                telaRegistro("registro")
                alert("Este endereço de email já foi cadastrado!")
            } 
            else if (dadosL[0]!="") {
                corpo.innerHTML = "<h1>Olá "+dadosL[2]+", você está logado!</h1><br>    <form method = 'post'><input type= 'submit' name = 'singout' value='sair'></form>";
                document.getElementById('registrar').style.display = 'none';
                document.getElementById('titulo').innerHTML = "LOGADO";
                document.getElementsByTagName("title")[0].innerHTML = "LOGADO";
            }
            
        }
    }
    xhttp.open("GET", "./php/login.php", true);
    xhttp.send();
}
pegarSessao();
