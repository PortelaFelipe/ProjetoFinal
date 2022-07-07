	// <a href="<?= base_url() . "?c=categoria&m=add" ?>">
		//	 Inserir Categoria
		// </a>

<a href="<?= base_url() ?>?c=categoria&m=excluir&id=<?= $categoria['nome']; ?>" 
							class="btn btn-danger" title="excluir">
								<i class="fa-solid fa-rectangle-xmark"></i>
							</a>
							<P>excluir</P>
							
							<a href="http://localhost/portela/ProjetoFinalSemestre/index.php?c=categoria&m=excluir&id=1"
							class="btn btn-primary" title="alterar">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>							
							