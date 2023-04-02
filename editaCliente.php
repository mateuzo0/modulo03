<?php 
	
	require_once 'connect.php';
	require_once 'functions.php';

	if(isset($_GET['id'])){
		$filter['id_client'] = $_GET['id'];
		$client = select("clients", null, $filter, " LIMIT 1")[0];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Edição </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
<?php include_once 'menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="editarClie.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Edição de Cliente
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome: <span class="text-danger">*</span> </label><br>
							<input type="text" name="client_name" class="form-control" required placeholder="Digite o nome" value="<?=$client['client_name'];?>"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> E-mail: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_email" class="form-control" required placeholder="Digite o e-mail" value="<?=$client['client_email'];?>"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> CPF <span class="text-danger">*</span> </label><br>
							<input type="text" name="client_cpf" class="form-control" required placeholder="Digite o CPF" value="<?=$client['client_cpf'];?>"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Telefone: <span class="text-danger">*</span></label><br>
							<input type="number" name="client_phone" class="form-control" required placeholder="Digite o telefone" value="<?=$client['client_phone'];?>"><br>
		  				</div>
						
                          <div class="col-md-6">
		  					<label> Endereço: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_adddress" class="form-control" required placeholder="Digite o endereço" value="<?=$client['client_adddress'];?>"><br>
		  				</div>

						<input type="hidden" name="id_client" value="<?=$client['id_client'];?>">
		  				
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Enviar Dados </button>
				    	</div>
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>