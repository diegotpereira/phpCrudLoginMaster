<?php

    include "conexao.php";

    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA` = '$senha'");

        if(mysqli_num_rows($result) > 0) {
            # code...
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            $_SESSION['msg']  = "Você está logado!";
            header('location:autorizado.php');
    }else {
        # code...
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        $_SESSION['msg'] = "Login/Senha incorretos!!!";
        header('location:login.php');
    }
?>