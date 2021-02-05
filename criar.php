<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
   $nome = $_POST['nome'];
   $ender = $_POST['ender'];
   $rg = $_POST['rg'];

   $query = "INSERT INTO PESSOA (NOME, RG, ENDER) VALUES ('$nome', '$rg', '$ender')";
   $ok = mysqli_query($conexao, $query);
   if ($ok) {
       # code...
       echo "Cadastrado com sucesso!!!";
   }else {
       # code...
       echo "Erro ao cadastrar!!!";
   }
   mysqli_close($conexao);
?>