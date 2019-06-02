<?php require RUTA_APP . '/vistas/inc/header.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="<?php echo RUTA_URL; ?>paginas/home" method="post">
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
						<input type="text" class="form-control" id="user" name="user">
					</div>
					<div class="form-group">
						<p>Contraseña</p>
						<input type="text" class="form-control" id="password" name="password">
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