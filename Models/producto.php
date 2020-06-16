<?php
class producto
{
	private $id, $nombre, $brief, $categoria_id, $price, $date, $img;

	private $db;
	function __construct()
	{
		$this->db = Database::connect();
	}

	public function setId($id)
	{
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNombre($n)
	{
		$this->nombre = $this->db->real_escape_string($n);
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setBrief($brief)
	{
		$this->brief = $this->db->real_escape_string($brief);
	}
	public function getBrief()
	{
		return $this->brief;
	}

	public function setCID($categoria_id)
	{
		$this->categoria_id = $this->db->real_escape_string($categoria_id);
	}
	public function getCID()
	{
		return $this->categoria_id;
	}

	public function setPrice($price)
	{
		$this->price = $this->db->real_escape_string($price);
	}
	public function getPrice()
	{
		return $this->price;
	}

	public function setDate($date)
	{
	}
	public function getDate()
	{
		return $this->date;
	}
	function setImg($img)
	{
		$this->img = $img;
	}

	function getImg()
	{
		return $this->img;
	}
	function getAll()
	{
		return $this->db->query('select * from productos order by id DESC');
	}
}
