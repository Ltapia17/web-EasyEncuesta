<?php 

Class Encuestas extends Paginas{

	public function addEncuesta(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$tipoEncuesta = $_POST['tipo-encuesta'];
			echo $tipoEncuesta;
		}
	}

}

 ?>