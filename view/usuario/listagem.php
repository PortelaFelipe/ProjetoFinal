   
   
   
	
	<div class="container">
		<h1>Lista de Usuarios</h1>
		<hr>
		
		 <a href="<?= base_url() . "?c=usuario&m=add" ?>"
		 class="btn btn-success">
			 Inserir Usuario
		 </a>
	
		
		<table class="table table-hover table-responsive">
		
			<thead>
				<tr>
					<th class="col-10">login</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach($usuarios as $usuario):?>
					<tr>
						<td><?php echo $usuario['login']; ?></td>
						<td>
							<a href="<?= base_url() ?>?c=usuario&m=excluir&id=<?= $usuario['idusuario']; ?>" class="btn btn-danger" title="excluir">
								<i class="fa-solid fa-rectangle-xmark"></i>
							</a>
							
							<a href="<?= base_url() ?>?c=usuario&m=editar&id=<?= $usuario['idusuario']; ?>" class="btn btn-primary" title="atualizar">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
							
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
			
		</table>

	</div>