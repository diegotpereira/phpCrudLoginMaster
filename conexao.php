<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'root';
    $dbname = 'db_php_crud_master_login';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname );

    if (!$conexao) {
        # code...
        die('Falha ao tentar se conectar ao banco de dados' . mysqli_connect_error());
    }else {
        # code...
        #echo ('Conexão ao banco de dados realizada com sucesso');
        mysqli_select_db($conexao, 'db_php_crud_master_login'); 
    }
?>