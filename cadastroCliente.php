<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Clientes </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="inserirClientes.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Cadastro de Clientes
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome: <span class="text-danger">*</span> </label><br>
							<input type="text" name="client_name" class="form-control" required placeholder="Digite o nome do cliente"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> E-mail: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_email" class="form-control" required placeholder="Digite o e-mail"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> CPF: <span class="text-danger">*</span> </label><br>
							<input type="text" name="client_cpf" class="form-control" required placeholder="Digite CPF"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Telefone: <span class="text-danger">*</span></label><br>
							<input type="number" name="client_phone" class="form-control" required placeholder="Digite o Telefone"><br>
		  				</div>

                          <div class="col-md-6">
		  					<label> Endereço: <span class="text-danger">*</span></label><br>
							<input type="text" min=0 step=1 name="client_adddress" class="form-control" required placeholder="Digite o endereço"><br>
		  				</div>

                          <div class="col-md-6">
		  					<label> Cadastro em: <span class="text-danger">*</span></label><br>
							<input type="date" min=0 step=1 name="client_created_in" class="form-control" required><br>
		  				</div>
									  				
			  							    	
		  				
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