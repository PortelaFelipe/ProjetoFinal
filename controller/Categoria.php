<?php

		
	require "model/CategoriaModel.php";
	
	class Categoria
	{
		function __construct(){
			$this->model = new CategoriaModel();		
		}//function construct
		
		function index(){
			$categorias = $this->model->BuscarTodos();
			//print_r($model->buscarTodos());
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/categoria/listagem.php";
			include "view/template/rodape.php";				
		}//function index
		
		function excluir($id){
			//$this->model->excluir($id);
			//header('Location: ?c=categoria');
			$categoria = $this->model->excluir($id);	
			header('Location: ?c=categoria');
		}//function excluir
		
		function add(){
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/categoria/form.php";
			include "view/template/rodape.php";
				
		}//function add	
		
		function editar($id){
			$categoria = $this->model->BuscarPorId($id);
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/categoria/form.php";
			include "view/template/rodape.php";
				
		}//function editar
		
		function salvar(){
			if(isset($_POST['categoria']) && !empty($_POST['categoria'])){
				
				if(empty($_POST['idcategoria'])){
					
					$this->model->inserir($_POST['categoria']);
					
				}else{
					
					$this->model->atualizar($_POST['idcategoria'], $_POST['categoria'] );
				}
				header('Location: ?c=categoria');
	
			}else{
				
				echo	"Ocorreu um erro, pois os dados nao foram enviados";
				
			}
			
			
		}
		
		
		
		
		
	}// class categoria

?>	
