<?php

	class Conexao
	{
		static $con = null;
		
		public static function getConnection()
		{
			$ip = "127.0.0.1";
			$port = "3366";
			$user = "root";
			$pass = "";
			$db = "db_catalogo3E2";
			
			if (!self::$con)
			{
				self::$con = new mysqli($ip,$user,$pass,$db,$port);
			
				if(self::$con->connect_error)
				{
					echo self::$con->connect_error;
					die();
				}
				
			}
			return self::$con;
		}//get conection
	}//class conexao
?>