<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
    //declaração de variáveis

if (!empty($_POST)) {
    //$rg = isset($_POST['rg']) && !empty($_POST['rg']) && $_POST['rg'] != 'auto' ? $_POST['rg'] : NULL;
    //$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    //$ender = isset($_POST['ender']) ? $_POST['ender'] : '';
	$rg=$_POST['rg'];
	$nome=$_POST['nome']; 
    $ender=$_POST['ender'];
    

	
	//insere os dados na tabela
	$query = "INSERT INTO pessoa (nome,ender,rg) VALUES ('$nome','$ender','$rg')";
	
	$ok = mysqli_query($conexao,$query);
	//verifica se os dados foram inseridos caso contrário retorna erro
	if($ok){
		echo "Cadastrado com sucesso!!!";
	}else{
		echo "Não cadastrado!!!";
	}

	mysqli_close($conexao);
}    
?>