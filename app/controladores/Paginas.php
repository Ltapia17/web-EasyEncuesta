<?php 
class Paginas extends Controlador{



	public function  __construct(){
		//crear una variable this usuario modelo y llamo al metodo carga modelo
		// pasandole como parametro la clase usuario

		$this->usuarioModelo = $this->cargaModelo('Usuario');
		$this->cargaApi = $this->cargaLibreria('Api');
	}
	
	public function index(){

		//obtener los usuarios

		


		//$this->cargaApi->test();

		$this->cargaVista('paginas/inicio');
	}



	public function encuesta(){
		$this->cargaVista('paginas/home/createpoll');
	}

	public function login(){
		$this->cargaVista('paginas/login');
	}

	public function home(){
		$this->cargaVista('paginas/home/home');
	}


	public function addPool(){

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$datos = ['nombre' =>trim($_POST['nombre']),
				  'email' =>trim($_POST['email']),
				  'telefono' =>trim($_POST['telefono'])
			];
			if($this->usuarioModelo->agregarUsuario($datos)){
				redirecionar('paginas');
			}else{
				die('algo salio mal');
			}
		}else{
			$datos = [
				'nombre' => '',
				'email' => '',
				'telefono' => ''
			];

			$this->cargaVista('paginas/agregar', $datos);
		}

		
	}

	public function editar($id){
			

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$datos = [
				  'id_usuario' =>$id,
				  'nombre' =>trim($_POST['nombre']),
				  'email' =>trim($_POST['email']),
				  'telefono' =>trim($_POST['telefono'])
			];
			if($this->usuarioModelo->actualizarUsuario($datos)){
				redirecionar('paginas');
			}else{
				die('algo salio mal');
			}
		}else{

			//obtener informacion de usuario desde el modelo

			$usuario = $this->usuarioModelo->obtenerUsuarioId($id);

			$datos = [
				'id_usuario' => $usuario->id_usuario,
				'nombre' => $usuario->nombre,
				'email' => $usuario->email,
				'telefono' => $usuario->telefono];

			$this->cargaVista('paginas/editar', $datos);
		}

	}

	public function borrar($id){

		//obtener informacion de usuario desde el modelo

		$usuario = $this->usuarioModelo->obtenerUsuarioId($id);

		$datos = [
			'id_usuario' => $usuario->id_usuario,
			'nombre' => $usuario->nombre,
			'email' => $usuario->email,
			'telefono' => $usuario->telefono
		];
			

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$datos = [
				  'id_usuario' =>$id
				  
			];
			if($this->usuarioModelo->borrarUsuario($datos)){
				redirecionar('paginas');
			}else{
				die('algo salio mal');
			}
		}
		$this->cargaVista('paginas/borrar', $datos);

	}

	
}

 ?>