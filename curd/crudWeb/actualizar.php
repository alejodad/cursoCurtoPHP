<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="bootstrap.3.3.7/content/Content/bootstrap.css">
</head>
<body>
	<?php 
	$cedula;
	if (empty($_REQUEST['cedula'])) {
	 	$cedula ="";
	 }else{ $cedula =$_REQUEST['cedula'] ; }


	 ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="POST" role="form">
					<legend>Registro</legend>
						<div class="form-group">
							<label for="idCEDULA">cedula</label>
							<input type="text" class="form control"     id="idCEDULA" name="cedula" placeholder="1019863..." value="<?= $cedula ?>" required>
						</div>
						<div class="form-group">
							<label for="idNombre">nombre</label>
							<input type="text" class="form control"     id="idNombre" name="nombre" placeholder="david..." required>
						</div>
						<div class="form-group">
							<label for="idTelefono">telefono</label>
							<input type="text" class="form control"     id="idTelefono" name="telefono" placeholder="6876103..." required>
						</div>
						<div class="form-group">
							<label for="idBiografia">biografia</label>
							<input type="text" class="form control"     id="idBiografia" name="biografia" placeholder="ESCRIBA ALGO" required>
						</div>
						<div class="form-group">
							<label for="idespec">especialida</label>
							<select clas="form-control" name="especialida" id="idespec">
								<option value="0">--SLECCIONA--</option>
								<option value=""></option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Actualizar
						</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>