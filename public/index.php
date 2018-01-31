<?php
require_once "../vendor/autoload.php";
use App\Conn\Conn;


$cliente = new App\Classes\Client("andreysmattos", "andreysmattos", Conn::getDb());


$cliente->validar();


