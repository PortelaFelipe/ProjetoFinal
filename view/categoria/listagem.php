   
   
   	<!-- Conteudo da pagina -->
	
	<div class="container">
		<h1>Lista de Categorias</h1>
		<hr>
		
		 <a href="<?= base_url() . "?c=categoria&m=add" ?>"
		 class="btn btn-success">
			 Inserir Categoria
		 </a>
	
		
		<table class="table table-hover table-responsive">
		
			<thead>
				<tr>
					<th class="col-10">Nome</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach($categorias as $categoria):?>
					<tr>
						<td><?php echo $categoria['nome']; ?></td>
						<td>
							<a href="<?= base_url() ?>?c=categoria&m=excluir&id=<?= $categoria['idcategoria']; ?>" class="btn btn-danger" title="excluir"><i class="fa-solid fa-rectangle-xmark"></i></a>
							
							<a href="<?= base_url() ?>?c=categoria&m=editar&id=<?= $categoria['idcategoria']; ?>" class="btn btn-primary" title="atualizar"><i class="fa-solid fa-pen-to-square"></i></a>
							
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
			
		</table>

	</div>