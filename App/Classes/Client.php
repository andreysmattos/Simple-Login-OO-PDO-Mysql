<?php

namespace App\Classes;




class Client implements IClient {
	//Atributos
	private $login;
	private $pass;
	private $token;
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


	public function setToken($token_parametro){
		$this->token = $token_parametro;
		return $this;

	}

	
	public function setPass($pass_parametro){
		$this->pass = $pass_parametro;
		return $this;

	}

	public function getLogin(){
		return $this->login;

	}

	public function getToken(){
		return $this->token;

	}

	
	public function getPass(){
		return $this->pass;

	}

	//ESSA FUNCAO VAI SER APAGADA
	public function gerar_hash($str){
		//DEPOIS MUDAR PRO  PASSWORD_ARGON2I
		echo password_hash($str, PASSWORD_DEFAULT);
	}
	

	public function validar(){


		if(!$this->endereco()){
			$_SESSION['msg'] = "Você tentou fazer login de um formulario não oficial.";
			return false;
			
		}


		if(!$this->tamanho_login()){
			$_SESSION['msg'] = "Tamanho do login é invalido.<br/>";
			return false;
		}


		if(!$this->tamanho_pass()){
			$_SESSION['msg'] = "Tamanho da senha é invalido.<br/>";			
			return false;
		}


		$sql = "SELECT * FROM `clients` where login = :login";
		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':login', $this->login);
		$stmt->execute();

		if(!$stmt->rowCount()){
			$_SESSION['msg'] = "Login incorreto.";
			return false;
		}

		$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);



		
		
		if(password_verify($this->pass, $resultado['pass'])){
			//CRIAR SESSION COM ID
			$_SESSION['id'] = $resultado['id'];
			$_SESSION['nome'] = $resultado['login'];
 			return true;
		} else {
			
			$_SESSION['msg'] = "Senha incorreta";
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

	//Verifica se o úsuario não está tentando fazer login de um formulario fake, trabalha em conjunto com o token
	public function endereco(){
		if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "http://localhost/Login/public/"){
			// se existir e a pagina que eu vir for diferente, ai entra aki
			return false;
		} else {
			return true;
		}
	}

	
	public static function gerar_token($tamanho = 10){
		//Não usei md5 ou outra criptografia pois queria praticar formas de gerar strings aleatorias.
		$fim = '';
		for ($i='a'; $i != 'aa'; $i++) { 
			$rand = rand(1,10);
			$alfabeto [] = (($rand % 2) == 0) ? $i : rand(0,9);

		}

		for($qtd = 0; $qtd <= $tamanho-1; $qtd++){
		    $rand2 = rand(0,count($alfabeto)-1);
		    $fim .= $alfabeto[$rand2];
		}
		$_SESSION['token'] = $fim;
		return $fim;
	}


	

	public static function alert($str1,$str2, $msg = 'danger'){
		echo '<div class="alert alert-'.$msg.'">';
		echo '<strong>'.$str1 .'</strong> ';
		echo $str2 . '</div>';
	}
	
	

	
}

