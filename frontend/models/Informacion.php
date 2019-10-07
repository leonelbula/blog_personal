<?php 

require_once 'config/DataBase.php';

/**
 * 
 */
class Informacion{	

	public $db;

	function __construct()
	{
		$this->db = DataBase::connect();
	}
	public function MostrarInformacion(){
		$sql = "SELECT * FROM informacion";
		$respt = $this->db->query($sql);
		return $respt;
	}
	
}
