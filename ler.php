<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
if (!empty($_POST)) {
   $nome = $_POST['nome'];

   $query = "SELECT * FROM pessoa WHERE Nome = '$nome'";

   $dados = mysqli_query($conexao, $query);
   if ($linha=mysqli_fetch_array($dados)) {
    # code...
   echo"Nome: " . $linha ["nome"]."<br>";
   echo "Endereço: " 	. $linha["ender"]. "<br>";
   echo "RG: " 		. $linha["rg"] 	. "<br>";
   }else {
       # code...
       echo "Nenhum usuário encontrado com esse nome";
   }
   mysqli_close($conexao);
}   
?>