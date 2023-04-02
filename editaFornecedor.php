<?php 
	
	require_once 'connect.php';
	require_once 'functions.php';

	if(isset($_GET['id'])){
		$filter['id_supplier'] = $_GET['id'];
		$supplier = select("suppliers", null, $filter, " LIMIT 1")[0];
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
	  		<form action="editarForne.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Edição de Fornecedor
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome <span class="text-danger">*</span> </label><br>
							<input type="text" name="supplier_name" class="form-control" required placeholder="Digite o nome" value="<?=$supplier['supplier_name'];?>"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Razão Social: <span class="text-danger">*</span></label><br>
							<input type="text" name="supplier_corporate_name" class="form-control" required placeholder="Digite a razão social" maxlength="12" value="<?=$supplier['supplier_corporate_name'];?>"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> CNPJ: <span class="text-danger">*</span> </label><br>
							<input type="text" name="supplier_cnpj" class="form-control" required placeholder="Digite o CNPJ" value="<?=$supplier['supplier_cnpj'];?>"><br>
		  				</div>
						
						<input type="hidden" name="id_supplier" value="<?=$supplier['id_supplier'];?>">
		  				
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