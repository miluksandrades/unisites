<?php

require_once "Config.php";

class ConnectionFactory{
	
	private static $conexao;
	
	public static function conectar()
	{
		try{
			if(!isset(self::$conexao)):
				$dsn = Config::DATABASE.":host"."=".Config::DB_HOST.";dbname=".Config::DB_NAME.";charset=utf8mb4";
				self::$conexao = new \PDO($dsn,Config::DB_USER,Config::DB_PASS);
				self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			endif;
		}catch (\PDOException $e){
			echo "Erro: " . $e->getMessage();
		}
		return self::$conexao;
	}
    
}