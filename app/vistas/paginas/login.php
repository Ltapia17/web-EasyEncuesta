<?php require RUTA_APP . '/vistas/inc/header.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="<?php echo RUTA_URL;?>public/js/main.js"></script>
</head>
<body>
	<form id="form" action="<?php echo RUTA_URL; ?>home/home" method="post">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card card-center">
				<div class="card-header">
					<h4 class="text-center">Login</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<p>Usuario</p>
						<input type="email" class="form-control" id="user" name="email">
					</div>
					<div class="form-group">
						<p>Contraseña</p>
						<input type="password" class="form-control" id="password" name="password">
						<br>
						<div id="error" style="display: none;"></div>
					<div id="error2" style="display: none;"></div>
					</div>

					<button type="submit" class="btn btn-outline-success btn-block">Ingresar</button>	
				</div>
			</div>
		</div>
	</div>

</div>
</form>
</body>
</html>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>