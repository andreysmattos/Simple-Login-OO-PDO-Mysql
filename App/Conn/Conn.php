<?php

namespace App\Conn;


abstract class Conn {
	public static function getDb(){
		try {
			 return new \PDO("mysql: host=localhost; dbname=login; charset=utf8", 'root', '');
		} catch (\PDOException $e){
			echo "<h4>";
				echo "Problema na conexão com banco de dados. <br/>";
				echo "Código: " . $e->getMessage() . "<br/>";
				echo "Arquivo: " . $e->getFile() . " <br/>Na linha:  ".$e->getLine()."<br/>";
			echo "</h4>";
			die();
		}
	}
}






