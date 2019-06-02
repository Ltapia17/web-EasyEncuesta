<?php 


// clase controlador principal
//se encarga de poder cargar los medelos y las vistas

class Controlador{
	// carga modelo

	public function cargaModelo($modelo){

		//carga modelo
		require_once '../app/modelos/'. $modelo. '.php';
		// instanciar modelo
		return new $modelo();

	}


	public function cargaLibreria($libreria){

		//carga libreria
		require_once '../app/librerias/'. $libreria. '.php';
		// instanciar libreria
		return new $libreria();

	}


	public function cargaVista($vista, $datos = []){

		//verificar si el la vista existe

		if(file_exists('../app/vistas/'.$vista .'.php')){
			require_once '../app/vistas/'. $vista. '.php';

		}else{
			die('la vista no existe');
		}
		

	}
}

 ?>