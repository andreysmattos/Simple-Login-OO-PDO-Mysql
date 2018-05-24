<?php
require_once "../../vendor/autoload.php";

use App\Classes\ReCaptcha;
use App\Conn\Conn;
use App\Classes\Client;

session_start();




if(!empty($_POST['login']) && !empty($_POST['password']) && $_POST['token'] == $_SESSION['token']){
	$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

	$cliente = new Client($login, $password, Conn::getDb());
	if($cliente->validar()){
		header("LOCATION: ../Html/logado.php");

	} else {
		header("LOCATION: ../../public");

	}


} else {
	$_SESSION['msg'] = "Digite todos os dados";
	header("LOCATION: ../../public");
}







