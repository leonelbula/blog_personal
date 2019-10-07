<?php

//require_once 'models/Informacion.php';

class suscripcionController{
	
	public function index() {
		
		require_once 'views/layout/menu.php';		
		require_once 'views/suscripcion/suscripcion.php';
		require_once 'views/layout/footer.php';
		
	}	
	public function guardar(){
		if ($_POST['email']) {
			$email = isset($_POST['email']) ? : $_POST['email'];
			$nombre = isset($_POST['nombre']) ? : $_POST['nombre'];

			if($email && $nombre){

				$datos;
			}
			
		}else{

		}
	}
}
