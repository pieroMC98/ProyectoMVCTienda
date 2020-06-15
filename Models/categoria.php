<?php
class categoria
{
	private $id, $db, $nombre;
	function __construct()
	{
		$this->db = Database::connect();
	}

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of nombre
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 *
	 * @return  self
	 */
	public function setNombre($nombre)
	{
		$this->nombre = $this->db->real_escape_string($nombre);
		return $this;
	}

	public function getAll()
	{
		return $this->db->query('select * from categorias order by id DESC');
	}

	function save()
	{
		$sql = "Insert into categorias values(NULL, '{$this->getNombre()}')";
		if ($this->db->query($sql)) return true;
		return false;
	}
}
