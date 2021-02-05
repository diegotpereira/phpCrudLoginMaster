<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
   $rg = $_POST['rg'];

   $query = "DELETE FROM PESSOA WHERE rg = '$rg'";
   $ok = mysqli_query($conexao, $query);
   if ($ok && mysqli_affected_rows($conexao) == 0) {
       # code...
       echo "RG não encontrado na lista!!!";
   }elseif ($ok && mysqli_affected_rows($conexao) > 0 ) {
       # code...
       echo "Excluído com sucesso";
   }else {
       # code...
       echo "Não foi possível excluir!!!";
   }
   mysqli_close($conexao);
?>