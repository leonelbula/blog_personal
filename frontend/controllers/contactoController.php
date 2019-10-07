<?php

require_once 'models/Informacion.php';

class contactoController{
	
	public function index() {
		
		require_once 'views/layout/menu.php';
		$contacto = new Informacion();
		$informacion = $contacto->MostrarInformacion();
		require_once 'views/contacto/contacto.php';
		require_once 'views/layout/footer.php';
		
	}	
	
}

