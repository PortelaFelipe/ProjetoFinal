<?php
	
	require "model/ProdutoModel.php";
	require "model/CategoriaModel.php";
	
	class Produto{
		
		function __construct(){
			$this->model = new ProdutoModel();		
			$this->categoria_model = new CategoriaModel();		
		}//function construct
		
		function index(){
			$produtos = $this->model->BuscarTodos();
			//print_r($model->buscarTodos());
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/produto/listagem.php";
			include "view/template/rodape.php";				
		}//function index
		
		function excluir($id){
			//$this->model->excluir($id);
			//header('Location: ?c=categoria');
			$categoria = $this->model->excluir($id);	
			header('Location: ?c=produto');
		}//function excluir
		
		function salvar_foto(){
			
			if(isset($_FILES['foto']) && !$_FILES['foto']['error']){
				echo $nome_imagem = time() . $_FILES['foto']['name'];
				echo $origem = $_FILES['foto']['tmp_name'];
				echo $destino = "fotos/$nome_imagem";
				if(move_uploaded_file($origem, $destino)){
					return $destino;
				}
			}
			return false;
		}
		
		function add(){
			$categorias = $this->categoria_model->BuscarTodos();
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/produto/form.php";
			include "view/template/rodape.php";
				
		}//function add	
		
		function editar($id){
			$produto = $this->model->BuscarPorId($id);
			$categorias = $this->categoria_model->BuscarTodos();
			include "view/template/cabecalho.php";
			include "view/template/menu.php";
			include "view/produto/form.php";
			include "view/template/rodape.php";
				
		}//function editar
		
		function salvar()
		{
			 $nome_foto = $this->salvar_foto() ?? "fotos/semfoto.jpg";
			
			if(isset($_POST['nome']) && !empty($_POST['nome']))
			{
				
				if(empty($_POST['idproduto']))
				{
					
					$this->model->inserir(
								$_POST['nome'],
								$_POST['descricao'],
								$_POST['preco'],
								$_POST['marca'],
								$nome_foto,
								$_POST['categoria']
					);
					
				}else
				{
					
					$this->model->atualizar(
					$_POST['idproduto'],
					$_POST['nome'],
					$_POST['descricao'],
					$_POST['preco'],
					$_POST['marca'],
					$nome_foto,
					$_POST['categoria']
					);
					
				}
				header('Location: ?c=produto');
	
			}else{
				
				echo	"Ocorreu um erro, pois os dados nao foram enviados";
				
				}
			
			
		}
	
	}
			
			
	
?>