	
	<div class="container">
		<h1>Listagem de Categorias</h1>
		<hr>
		
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
						<td><?php = ?categoria['nome']?></td>
						<td>
							<a href="http://" class="btn btn-danger" title="excluir">
								<i class="fa-solid fa-trash-can-slash"></i>
							</a>
							
							<a href="http://" class="btn btn-primary" title="excluir">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>							
							
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
			
		</table>
		
		
		
		
		
	</div>