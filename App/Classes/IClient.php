<?php

namespace App\Classes;

interface IClient {
	public function getLogin();
	public function getPass();

	public function setLogin($login_parametro);
	public function setPass($pass_parametro);

	public function validar();

}