<?php

		
	require "model/UsuarioModel.php";
	
	class Usuario
	{
		function __construct(){
			$this->model = new UsuarioModel();		
		}//function construct
		
		function index(){
			$usuarios = $this->model->BuscarTodos();
			
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/usuario/listagem.php";
			include "view/template/rodape.php";				
		}//function index
		
		function excluir($id){
			//$this->model->excluir($id);
			$categoria = $this->model->excluir($id);	
			header('Location: ?c=usuario');
		}//function excluir
		
		function add(){
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/usuario/form.php";
			include "view/template/rodape.php";
				
		}//function add	
		
		function editar($id){
			$usuario = $this->model->BuscarPorId($id);
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/usuario/form.php";
			include "view/template/rodape.php";
				
		}//function editar
		
		function salvar(){
			if(isset($_POST['login']) && !empty($_POST['login']) && !empty($_POST['senha'])){
				
				if(empty($_POST['idusuario'])){
					
					if(!$this->model->BuscarPorLogin($_POST['login'])){
						$this->model->inserir($_POST['login'],password_hash($_POST['senha'], PASSWORD_BCRYPT));				
					}else{
						echo	"Já existe um usuario com este login";
						die();
					}	
				}else{
					
					$this->model->atualizar($_POST['idusuario'],$_POST['login'],password_hash($_POST['senha'], PASSWORD_BCRYPT));
				}
				header('Location: ?c=usuario');
	
			}else{
				
				echo	"Ocorreu um erro, pois os dados nao foram enviados";
				
			}
	
		}

		
	}// class categoria

?>	
