<?php  

	include_once 'connect.php';
	include_once 'functions.php';
	
	# Gravando os dados no banco
	$filter['id_client'] = $_POST['id_client'];
	
	$result = delete("clients", $filter);

	if($result){
		header("location: listaClientes.php");
	}else{
		header("location: cadastroCliente.php?mgs=error");		
	}

?>