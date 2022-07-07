<?php

	class Conexao
	{
		
		
		static	$host = "127.0.0.1";
		static	$user = "root";
		static	$pass = "";
		static	$port = "3366";
		static	$database = "db_catalogo3E2";
		static 	$con;
				
			
		public static function getConnection()
		{
			if (!self::$con)
			{
				self::$con = new mysqli(self::$host,self::$user,self::$pass,self::$database,self::$port);
			
				if(self::$con->connect_error)
				{
					echo "Ocorreu um erro:" . self::$con->connect_error;
					die();
				}
				
			}
			return self::$con;
		}
	}//class conexao //parei nos 44:10
?>

