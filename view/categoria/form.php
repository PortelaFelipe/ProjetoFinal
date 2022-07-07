   
   
   <!-- form da pagina -->
   <div class="container mt-2 mb-3">
		<h1>Cadastro de Categorias</h1>
		<hr>
		
		
		
		
		<form method="POST" action="<?= base_url() . "?c=categoria&m=salvar" ?>">
			<div class="mb-3">
				<label for="categoria" class="form-label">Nome</label>
				<input type="text" class="form-control" id="categoria" name="categoria"
				value="<?= $categoria['nome'] ?? '' ?>">
			</div>
			<input type="hidden" name='idcategoria' 
			value="<?= $categoria['idcategoria'] ?? '' ?>">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>	
		
<!-- não está atualizando os dados>
	</div>
   
   
   
   
   
   