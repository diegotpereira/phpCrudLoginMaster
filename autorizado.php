<?php
    
    include"cabecalho.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php
       session_start();
       if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
           # code...
           unset($_SESSION['login']);
           unset($_SESSION['senha']);
           $_SESSION['msg'] = "Faça o ligin para acessar a página!";
           header('location:login.php');
       }
       $logado = $_SESSION['login'];
    ?>
    <meta charset="utf-8">
    <title>Sistema Web Cadastro</title>
</head>
</html>