<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
if (!empty($_GET)) {
   $nome = isset($_GET['nome']) ? $_GET['nome'] : '';

   $query = "SELECT * FROM pessoa WHERE nome = '$nome'";

   $dados = mysqli_query($conexao, $query);
   if ($linha=mysqli_fetch_array($dados)) {
    # code...
    echo"Nome: " . $linha ["Nome"]."<br>";
	echo "Endereço: " 	. $linha["Ender"]. "<br>";
	echo "RG: " 		. $linha["RG"] 	. "<br>";
   }else {
       # code...
       echo "Nenhum usuário encontrado com esse nome";
   }
   mysqli_close($conexao);
}   
?>