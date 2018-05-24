<?php
require_once "../vendor/autoload.php";
use App\Conn\Conn;
use App\Classes\Client;

$cliente = new Client("andreysmattos", "andreysmattos", Conn::getDb());


$htmlPage = "login.phtml";


include "../App/layout.phtml";