<?php
    session_start();
    $dados = array($_SESSION['email'],$_SESSION['senha'],$_SESSION['nome']);
    echo json_encode($dados);
?>