   
   
   <!-- form da pagina -->
   <div class="container mt-2 mb-3">
		<h1>Cadastro de Produtos</h1>
		<hr>
		
		
		
		
		<form method="POST" action="<?= base_url() . "?c=produto&m=salvar" ?>" enctype="multipart/form-data">
			
			<div class="mb-3">
				<label for="categoria" class="form-label">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome"
				value="<?= $produto['nome'] ?? '' ?>">
			</div>
			
			<div class="mb-3">
				<label for="descricao" class="form-label">Descricao</label>
				<textarea class="form-control" id="descricao" name="descricao">
				<?= $produto['nome'] ?? '' ?>
				</textarea>
			</div>
			
			<div class="mb-3">
				<label for="preco" class="form-label">Preço</label>
				<input type="number" step='0.01' class="form-control" id="preco" name="preco"
				value="<?= $produto['preco'] ?? '' ?>">
			</div>			
			
			<div class="mb-3">
				<label for="marca" class="form-label">Marca</label>
				<input type="text" class="form-control" id="marca" name="marca"
				value="<?= $produto['marca'] ?? '' ?>">
			</div>			
			
			<div class="mb-3">
				<label for="foto" class="form-label">Foto</label>
				<input type="file" class="form-control" id="foto" name="foto">
			</div>			
			
			<div class="mb-3">
				<label for="categoria" class="form-label">Categoria</label>
				<select class="form-control" id="categoria" name="categoria">
					<option></option>
					<?php foreach($categorias as $categoria):?>
						<option value="<?= $categoria['idcategoria'] ?? '' ?>"
							<?=  ($categoria['idcategoria'] == ($produto['categoria_idcategoria'] ?? "")) ? "selected" : "" ?>>
							<?= $categoria['nome'] ?? '' ?>
						</option>
					<?php endforeach; ?>
				</select>
				
			</div>
			
			
			
			
			<input type="hidden" name='idproduto' 
			value="<?= $produto['idproduto'] ?? '' ?>">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>	
		
<!-- não está atualizando os dados>
	</div>
   
   
   
   
   
   