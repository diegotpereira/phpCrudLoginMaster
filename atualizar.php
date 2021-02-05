<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
   $nome = $_POST['nome'];
   $ender = $_POST['ender'];
   $id = $_POST['rg'];

   $query = "UPDATE PESSOA SET NOME = '$nome', ender = '$ender' WHERE rg = '$id'";
   $ok = mysqli_query($conexao, $query);
   if ($ok && mysqli_affected_rows($conexao) == 0) {
       # code...
       echo "RG não encontrado na lista!!!";
   }elseif ($ok && mysqli_affected_rows($conexao) > 0 ) {
       # code...
       echo "Atualizado com sucesso";
   }else {
       # code...
       echo "Não foi possível atualizar!!!";
   }
   mysqli_close($conexao);
?>