<?php

		
	require "model/CategoriaModel.php";
	require "controller/controller.php";
	
	
	class Categoria extends Controller
	{
		function __construct(){
			$this->model = new CategoriaModel();	
		}//function construct
		
		function index(){
			$categorias = $this->model->BuscarTodos();
			$this->load_template("categoria/listagem.php",$categorias);
		}//function index
		
		function inserir(){
			//echo "testando funçao inserir";
			
		}//function inserir
		
	}// class categoria
	
	
	//$model->inserir("Produto de Limpeza");
	//$model->excluir(1);
	//$model->atualizar("Smatphone", 2);
	//var_dump($model->BuscarTodos());
	
?>