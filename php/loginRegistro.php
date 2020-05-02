<?php
    header('Location: ../');
    session_start();
    $pastaStr = "../dados/";
    $dadosFolder = scandir($pastaStr);
    $md5_userEmail = md5($_POST['email']);
    if (in_array($md5_userEmail.".json", $dadosFolder)) {
        $_SESSION['email'] = "err03";
        $_SESSION['senha'] = "err03";
        $_SESSION['nome'] = "err03";
    }
    else{
        $md5_userSenha = md5($_POST['senha']);
        $arquivoArray = array(
            "email" => $md5_userEmail,
            "senha" => $md5_userSenha,
            "nome" => $_POST['nome']
        );
        $arquivo = fopen($pastaStr.$md5_userEmail.".json","a");
        fwrite($arquivo, json_encode($arquivoArray));
        fclose($arquivo);
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['nome'] = $_POST['nome'];
    }
?>