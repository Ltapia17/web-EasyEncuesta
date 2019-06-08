<?php require RUTA_APP . '/vistas/inc/header.php';?>
<!DOCTYPE html>
<head>
	<title></title>
	<script src="<?php echo RUTA_URL; ?>public/js/generador.js"></script>
</head>
<body>

	<form id="form" action="<?php echo RUTA_URL; ?>home/addPool" method="post">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-secondary">
					<h4 class="text-center">Crear Encuesta</h4>
				</div>
				<div class="card-body bg-light">
					<div class="form-group">
						<p>Tipo Encuesta</p>
						<input type="text" id="tipoencuesta" name="tipo-encuesta" class="form-control">
					</div>
					<div class="form-group">
						<p>Nombre Encuesta</p>
						<input type="text" id="nombre-encuesta" name="nombre-encuesta" class="form-control">
					</div>
					<div class="form-group">
						<p>Cantidad de preguntas por Encuesta</p>
							<select id="select_largo_encuesta" class="form-control" name="select">
								<option value="0">Cantidad Preguntas</option>
								<option id="1" value="1">1</option>
								<option id="2" value="2">2</option>
								<option id="3" value="3">3</option>
								<option id="4" value="4">4</option>
								<option id="5" value="5">5</option>		
							</select>	
							</div>
							<div class="form-group" id="input">
					</div>

					
					<button type="submit" id="submit" name="submit" class="btn btn-outline-success btn-block">Crear Encuesta</button>
				</div>
			</div>
		</div>
	</div>
</form>

</body>
</html>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>