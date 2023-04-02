<?php  

	include_once 'connect.php';
	include_once 'functions.php';
	
	# Gravando os dados no banco
	$filter['id_supplier'] = $_POST['id_supplier'];
	
	$result = delete("suppliers", $filter);

	if($result){
		header("location: listaFornecedores.php");
	}else{
		header("location: cadastroFornecedor.php?mgs=error");		
	}

?>