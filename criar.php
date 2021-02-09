<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
   
	if (!empty($_POST)) {
		
		$nome=$_POST['nome']; 
		$ender=$_POST['ender'];
		$rg=$_POST['rg'];
		
		$query = "INSERT INTO pessoa (nome,ender,rg) VALUES ('$nome','$ender','$rg')";
		
		$ok = mysqli_query($conexao,$query);
		
		if($ok){
			echo "Cadastrado com sucesso!!!";
		}else{
			echo "Não cadastrado!!!";
		}

		mysqli_close($conexao);
	}    
?>