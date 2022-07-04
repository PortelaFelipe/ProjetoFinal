<?php

		
	require "model/CategoriaModel.php";
	
	
	class Categoria
	{
		function __construct(){
			$this->model = new CategoriaModel();	
		}//function construct
		
		function index(){
			$categorias = $this->model->BuscarTodos();
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/categoria/listagem.php";
			include "view/template/rodape.php";
		}//function index
		
		function inserir(){
			//echo "testando funçao inserir";
			
		}//function inserir
		
		function excluir($id){
			$this->model->excluir($id);
			header('Location: ?c=categoria');
		}//function excluir
		
		function add(){
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/categoria/conteudo.php";
			include "view/template/rodape.php";
		}//function add
		
		
	}// class categoria
	
	
	//$model->inserir("Produto de Limpeza");
	//$model->excluir(1);
	//$model->atualizar("Smatphone", 2);
	//var_dump($model->BuscarTodos());
	
?>