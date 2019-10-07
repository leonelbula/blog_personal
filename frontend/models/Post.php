<?php 

require_once 'config/DataBase.php';

/**
 * 
 */
class Post{	

	public $db;

	function __construct()
	{
		$this->db = DataBase::connect();
	}
	public function MostrarPost(){
		$sql = "SELECT * FROM post  ORDER BY id DESC LIMIT 5";
		$respt = $this->db->query($sql);
		return $respt;
	}
	public function Categoria(){
		$sql = "SELECT * FROM categoria  ORDER BY nombre";
		$respt = $this->db->query($sql);
		return $respt;
	}
	public function Anuncios(){
		$sql = "SELECT * FROM anuncio WHERE estado = 1";
		$respt = $this->db->query($sql);
		return $respt;
	}
}
