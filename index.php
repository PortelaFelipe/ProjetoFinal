<?php

	$controlador_padrao = 'Categoria';
	$controlador = ucfirst($_GET['c'] ?? $controlador_padrao);
	$metodo = $_GET['m'] ?? 'index';

	$caminho_controlador = "controller/$controlador.php";


$base_url= 'http://localhost/ProjetoFinalSemestre2/index.php';

	if(file_exists($caminho_controlador))
	{
		require $caminho_controlador;
		$objController = new $controlador();
		
		$id = $_GET['id'] ?? null;
		
		//verifica se o controlador possui uma funcao
			if(is_callable(array($objController, $metodo))){
				
			call_user_func_array(array($objController, $metodo),array($id ));
			}
			
		}
	
	

 			function base_url(){
			 global $base_url;
 			 return $base_url;}
	


?>

 

<!-- 

Atualizar o arquivo no GitHub

git add *
git commit -m "Interface Grafica"
git push -u origin main


...ProjetoFinalSemestre/index.php?c=categoria
segundo video 9:45
-->