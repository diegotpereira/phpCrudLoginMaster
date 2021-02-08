<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
if (!empty($_POST)) {
    
    $id = isset($_POST['id']) ? $_POST['id'] : NULL;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $ender = isset($_POST['ender']) ? $_POST['ender'] : '';



   $query = "UPDATE PESSOA SET nome = '$nome', ender = '$ender' WHERE rg = '$id'";
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

}   
?>