<?php  

	include_once 'connect.php';
	include_once 'functions.php';
	
	# Gravando os dados no banco
	$result = insert("suppliers", $_POST);

	if($result){
		header("location: listaFornecedores.php");
	}else{
		header("location: cadastroFornecedores.php?mgs=error");		
	}

?>