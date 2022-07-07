<?php

require_once "config/Conexao.php";


	class UsuarioModel{
		
		function __construct(){
			$this->conexao = Conexao::getConnection();
		}
	
		//funçao inserir	
		function inserir($login, $senha){
			$sql = "INSERT INTO usuario (login, senha) values (?,?)";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("ss", $login,$senha);
			$comando->execute();
		}
		
		// funçao excluir		
		function excluir($id){
			$sql = "DELETE FROM usuario WHERE idusuario = ?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("i", $id);
			$comando->execute();
		}
		
		// funçao atualizar		
		function atualizar($id, $login, $senha){
			$sql = "UPDATE usuario SET login=?, senha=? WHERE idusuario=?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("ssi", $login,$senha,$id);
			$comando->execute();
		}
		
		// funçao Buscar Todos	
		function BuscarTodos(){
			$sql = "SELECT * FROM usuario";
			$comando= $this->conexao->prepare($sql);
			if ($comando->execute()){
				$resultado = $comando->get_result();
				return $resultado->fetch_all(MYSQLI_ASSOC);
			}
			return null;
		}
		
		// funçao Buscar por	
		function BuscarPorId($id){
			$sql = "SELECT * FROM usuario WHERE idusuario = ?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("i",$id);
			if ($comando->execute()){
				$resultado = $comando->get_result();
				return $resultado->fetch_assoc();
			}
			return null;
		}	
		
		// funçao Buscar por	
		function BuscarPorLogin($login){
			$sql = "SELECT * FROM usuario WHERE idusuario = ?";
			$comando= $this->conexao->prepare($sql);
			$comando->bind_param("s",$login);
			if ($comando->execute()){
				$resultado = $comando->get_result();
				return $resultado->fetch_assoc();
			}
			return null;
		}	
	}// class CategoriaModel



?>