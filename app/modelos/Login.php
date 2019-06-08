<?php 

class Login {

	private $db;
	

	public function __construct(){
		$this->db = new Base;
		
	}


	public function consultLogin($dates){
       	$this->db->query('SELECT email, password FROM users WHERE email=:email AND password=:password');
		$this->db->bind(':email',$dates['email']);
		$this->db->bind(':password',$dates['password']);
		$result = $this->db->getRegisterBd();
		$row = $this->db->rowCount($result);
		if ($row > 0) {
			return true;
		}else{
			return false;
		}
	}
}


	
 ?>