<?php
class Paginas extends Controlador{



	public function  __construct(){
		//crear una variable this usuario modelo y llamo al metodo carga modelo
		// pasandole como parametro la clase usuario

		$this->usuarioModelo = $this->cargaModelo('Usuario');
		$this->cargaApi = $this->cargaLibreria('Api');
		$this->loginModelo = $this->cargaModelo('Login');

	}	
	
	public function index(){

		$this->cargaVista('paginas/inicio');
	}

public function login(){
		$this->cargaVista('paginas/login');
	}

	public function home(){
		if($_SERVER['REQUEST_METHOD']=='POST' && empty(!$_POST['email']) || empty(!$_POST['password'])){
			$dates =[
				'email' => filter_var(strtolower($_POST['email']),FILTER_SANITIZE_STRING),
				'password' => filter_var(strtolower($_POST['password']),FILTER_SANITIZE_STRING)
				];

					if ($this->loginModelo->consultLogin($dates) == true) {
						session_start();
						$_SESSION['user'] = $dates['email'];
						$this->cargaVista('paginas/home/home');
						
					}else{
						redirect('paginas/login');
					}

		}else{
			if (empty($_POST['email']) && empty($_POST['password'])){
				
				redirect('paginas/login');
					}

					
			}
		}

			public function encuesta(){
		$this->cargaVista('paginas/home/createpoll');
	}




	


	public function addPool(){
		
		$pregunta="pregunta";
		$select=$_POST['select'];
		echo $select."<br>";

		for($i = 1;$i<=$select;$i++){
			$pregunta.$i=$_POST['pregunta'.$i];
			echo $pregunta.$i."<br>";
		}
			

	}

	public function createVariable($i,$preguntas){
			$preguntaguardada=$preguntas.$i;
			$preguntaguardada=$_POST['pregunta'.$i];
		}



	

	
}

 ?>