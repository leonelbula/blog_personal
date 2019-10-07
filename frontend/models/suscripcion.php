<?php 

require_once 'config/DataBase.php';

/**
 * 
 */
class Post{	

	public $db;

	private $id;
	private $email;
	private $nombre;
	

	function __construct()
	{
		$this->db = DataBase::connect();
	}
	public function Guardar(){
		$sql = "";
		$respt = $this->db->query($sql);
		return $respt;
	}
	
}
