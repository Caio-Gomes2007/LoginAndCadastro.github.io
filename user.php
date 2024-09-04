<?php
include ("connect.php");

class User{
	private $nome;
	private $email;
	private $password;

	public function __construct($nome,$email,$password){
		$this->nome = $nome;
		$this->email = $email;
		$this->password = $password; 
	}
	public function get_name(){
    echo $this -> nome;
	}
	public function get_email(){
		return $this ->email;
	}
	public function get_password(){
		return $this -> password;
	}
	public function cadastrar($conn){
		$sql = "INSERT INTO pessoa (nome,email,password) VALUES ('$this->nome', '$this->email','$this->password')";
		if($conn->query($sql)==true){
			echo "registro feito";
		}else {
			echo "erro" . $sql . "<br>" .$conn->error;
		} 
  }
  public StartCookie(){
      setcookie('User',$this->nome,time() +(86400 * 30 ) , '/');
  }
};






?>
