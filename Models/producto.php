<?php
class producto
{
	private $id, $nombre, $brief, $categoria_id, $price, $date, $img;

	private $db = Database::connect();

	public function setId()
	{
	}
	public function getId()
	{
		return $this->id;
	}

	public function setNombre()
	{
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setBrief()
	{
	}
	public function getBrief()
	{
		return $this->brief;
	}
	public function setCID()
	{
	}
	public function getCID()
	{
		return $this->categoria_id;
	}

	public function setPrice()
	{
	}
	public function getPrice()
	{
		return $this->price;
	}

	public function setDate()
	{
	}
	public function getDate()
	{
		return $this->date;
	}
	function setImg()
	{
	}

	function getImg()
	{
		return $this->img;
	}
}
