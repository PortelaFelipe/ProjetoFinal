<?php

require "config/Conexao.php";

	class CategoriaModel{
		
		function __construct(){
			$this->conexao = Conexao::getConnection();
		}
	
//funçao inserir	
		function inserir($nome){
			$sql = "INSERT INTO categoria (nome) values (?)";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("s", $nome);
			return $comando->execute();
		}
		
// funçao excluir		
		function excluir($id){
			$sql = "DELETE FROM categoria WHERE idcategoria = ?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("i", $id);
			return $comando->execute();
		}
		
// funçao atualizar		
		function atualizar($nome, $id){
			$sql = "UPDATE categoria SET nome=? WHERE idcategoria=?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("si", $nome,$id);
			return $comando->execute();
		}
		
// funçao Buscar Todos	
		function BuscarTodos(){
			$sql = "SELECT * FROM categoria";
			$comando= $this->conexao->prepare($sql);
			if ($comando->execute()){
				$resultado = $comando->get_result();
				return $resultado->fetch_all(MYSQLI_ASSOC);
			}
			return null;
		}
		
// funçao Buscar por ID		
		function BuscarPorId($id){
			$sql = "SELECT * FROM categoria WHERE idcategoria = ?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("i",$id);
			if ($comando->execute()){
				$resultado = $comando->get_result();
				return $resultado->fetch_assoc();
			}
			return null;
		}

		
	}// class CategoriaModel



?>