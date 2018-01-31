<?php

namespace App\Classes;



class Client implements IClient {
	//Atributos
	private $login;
	private $pass;
	private $db;



	//Metodos

	public function __construct($login, $pass,\PDO $db){
		$this->setLogin($login);
		$this->setPass($pass);
		$this->db = $db;

	}

	public function setLogin($login_parametro){
		$this->login = $login_parametro;
		return $this;

	}

	
	public function setPass($pass_parametro){
		$this->pass = $pass_parametro;
		return $this;

	}

	public function getLogin(){
		return $this->login;

	}

	
	public function getPass(){
		return $this->pass;

	}

	//ESSA FUNCAO VAI SER APAGADA
	public function gerar_hash($str){
		//DEPOIS MUDAR PRO  PASSWORD_ARGON2I
		echo password_hash($str, PASSWORD_DEFAULT );
	}
	

	public function validar(){

		if(!$this->tamanho_login()){
			echo "Tamanho do login é invalido<br/>";
			return false;
		}


		if(!$this->tamanho_pass()){
			echo "Tamanho da senha é invalida<br/>";			
			return false;
		}


		$sql = "SELECT * FROM `clients` where login = :login";
		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':login', $this->login);
		$stmt->execute();
		$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
		
		
		if(password_verify($this->pass, $resultado['pass'])){
			//CRIAR SESSION COM ID
			echo "<hr> LOGADO <hr>";
			return true;
		} else {
			//Criar session com msg de senha errada
			return false;
		}
	}


	public function tamanho_login(){
		if(mb_strlen($this->login, 'UTF-8') >= 8 && mb_strlen($this->login, '8bit') <= 72){
			return true;			
		} else {
			return false;
		}		
	}


	public function tamanho_pass(){
		if(mb_strlen($this->pass, 'UTF-8') >= 8 && mb_strlen($this->pass, '8bit') <= 72){
			return true;
		} else {
			return false;
		}		
	}

	


	
	public function deslogar(){


	}

	
}

