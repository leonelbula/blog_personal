<?php

require_once 'models/Post.php';
require_once 'models/Informacion.php';

class frontendController{
	
	public function index() {
		
		require_once 'views/layout/menu.php';
		$post = new Post();
		$ListaPost = $post->MostrarPost();
		$categorias = $post->Categoria();
		$anuncio = $post->Anuncios();
		require_once 'views/layout/principal.php';
		require_once 'views/layout/footer.php';
		
	}	
	
}

