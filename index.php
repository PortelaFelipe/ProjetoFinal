<?php

	if(isset($_GET['c']))
	{
		$controler = ucfirst($_GET['c']);
		$path_controler = "controler/$controler.php";
		echo $path_controler;
		
		//verifica se o arquivo de controler existe
		if(file_exists($path_controler))
		{
			require $path_controler;
			
			//verifica se foi enviada a variavel $_GET['m']
			//que contém o método do controlador que desejo
			
			
				$metodo = $_GET['m'] ?? "index";
				
				//cria o objeto controlador
				$obj = new $controler();
							
				//verifica se o controlador possui uma funcao
				if(is_callable(array($obj, $metodo))){
					echo "eai amigo, beleza? existe a funçao";
					call_user_func_array(array($obj, $metodo),array());
				}
			
		}
	}
	




?>