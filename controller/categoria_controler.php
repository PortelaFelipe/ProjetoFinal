<?php

		
	require "model/CategoriaModel.php";
	class Categoria
	{
		function __construct(){
			$this->$model = new CategoriaModel();	
		}//function construct
		
		function index(){
			var_dump($this->model->BuscarTodos());
		}//function index
		
		function inserir(){
			echo "testando funçao inserir";
		}//function inserir
		
	}// class categoria
	
	
	//$model->inserir("Produto de Limpeza");
	//$model->excluir(1);
	//$model->atualizar("Smatphone", 2);
	//var_dump($model->BuscarTodos());
	
?>