<?php
    header('Location: ../');
    session_start();
    $pastaStr = "../dados/";
    $dadosFolder = scandir($pastaStr);

    $md5_userEmail = md5($_POST['email']);

    if (in_array($md5_userEmail.".json",$dadosFolder)) {
        $userDados = json_decode(file_get_contents($pastaStr.$md5_userEmail.'.json'));
        if ($userDados->senha == md5($_POST['senha'])) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['senha'] = $_POST['senha'];
            $_SESSION['nome'] = $userDados->nome;
        }
        else {
            $_SESSION['email'] = "err";
            $_SESSION['senha'] = "err";
            $_SESSION['nome'] = "err";
        }
    }
    else {
        $_SESSION['email'] = "err";
        $_SESSION['senha'] = "err";
        $_SESSION['nome'] = "err";
    }    
?>