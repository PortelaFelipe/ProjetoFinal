	
	<div class="container">
		<h1>Listagem de Categorias</h1>
		<hr>
		
		<a href="<?= base_url() . "?c=categoria&m=add" ?>">
			Inserir Categoria
		</a>
		
		<table class="table table-hover">
		
			<thead>
				<tr>
					<td>Nome</td>
					<td>Açoes</td>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach($categorias as $categoria):?>
					<tr>
						<td><?= $categoria['nome']?></td>
						<td>
							<a href="<?= base_url() ?>?c=categoria&m=excluir&id=<?= $categoria['nome']; ?>" 
							class="btn btn-danger" title="excluir">
								<i class="fa-solid fa-rectangle-xmark"></i>
							</a>
							
							<a href="http://localhost/portela/ProjetoFinalSemestre/index.php?c=categoria&m=excluir&id=1"
							class="btn btn-primary" title="alterar">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>							
							
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
			
		</table>
		
		
		
		
		
	</div>