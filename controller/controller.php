<?php

class Controller{
	public function load_template($url_view, $categorias){
		include "view/template/cabecalho.php";
		include "view/template/menu.php";
		include "view/template/$url_view";
		include "view/template/rodape.php";
	}
}


?>