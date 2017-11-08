<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="bootstrap.3.3.7/content/Content/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">			
				<h3>Listado clientes</h3>
		</div>
		<div class="row">
				<a href="formulario.php" class=" btn btn-danger">Nuevo</a>
		</div>
		
		<div class="row table-responsive">
				
					<?php 
					require "../conexionClases/abogado.php"	;
					$uno = new abogado();
					$datos = $uno ->Listar();					

					 ?>
					<table class="table table-hover">
						<thead>
							<th>cedula</th>
							<th>nombre</th>
							<th>telefono</th>
							<th>biografia</th>
							<th>especialidad</th>
							<th></th>
						</thead>
						<tbody>
							<?php 

							foreach ($datos as $key => $value) {
															
							 ?>
							 <tr>
							<td><?= $value -> cedulaAbogado ?></td>
							<td><?= $value -> nombreAbogado  ?></td>
							<td><?= $value -> numeroTelefonoAbogado ?></td>
							<td><?= $value -> biograiaAbogado  ?></td>
							<td><?= $value -> nombreEspecialidad ?></td>
							<td>
								<a href="#" data-href="../conexionClases/accionEliminar.php?cedula=<?= $value -> cedulaAbogado ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete">Eliminar</a>
								<a href="actualizar.php?cedula=<?= $value -> cedulaAbogado ?>" class="btn btn-info btn-sm">Editar</a>
							</td>
							</tr>
							<?php 
							}
							 ?>
						</tbody>
					</table>
				
			
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="confirm-delete">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" id="modal-btn-si">Si</button>
	        <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script >
		$('confirm-delete').on('show.bs.modal', function(e){
			$(this).find('.btn-ok').altr('href', $(e.relatedTarget).data('href'));

			$('debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').alter('href') + '</strong>');
		});
	</script>
</body>
</html>