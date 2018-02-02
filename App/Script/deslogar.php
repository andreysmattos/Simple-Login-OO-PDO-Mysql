<?php

session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome'])){
	unset($_SESSION['id']);
	unset($_SESSION['nome']);
	$_SESSION['msg'] = "Deslogado com sucesso!";
	$_SESSION['str1'] = "";
	$_SESSION['cor'] = "success";

} 

header('LOCATION: ../../public');