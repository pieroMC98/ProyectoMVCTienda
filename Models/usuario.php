<?php
class usuario
{
	private  $id, $nombre, $apellido, $email, $password, $imagen;
	private $rol;

	private $db;
	function __construct()
	{
		$this->db = Database::connect();
	}
	function setNombre($n)
	{
		$this->nombre = $this->db->real_escape_string((string) $n);
	}
	function getNombre()
	{
		return $this->nombre;
	}

	function setId(string $id)
	{
		$this->id = $this->db->real_escape_string((string) $id);
	}
	function getId()
	{
		return (string) $this->id;
	}
	function  setApellido(string $ap)
	{
		$this->apellido = $this->db->real_escape_string((string) $ap);
	}
	function  getApellido()
	{
		return (string) $this->apellido;
	}

	function setEmail(string $mail)
	{
		$this->email = $this->db->real_escape_string((string) $mail);
	}
	function getEmail()
	{
		return	(string) $this->email;
	}

	function setPassword(string $s)
	{
		$this->password = password_hash($this->db->real_escape_string((string) $s), PASSWORD_BCRYPT, ['cost' => 4]);
	}
	function getPassword()
	{
		return 	$this->password;
	}

	function  setImagen($im)
	{
		$this->imagen =	 $this->db->real_escape_string($im);
	}
	function  getImagen()
	{
		return $this->imagen;
	}

	function  getRol()
	{
		return 		$this->rol;
	}
	function  setRol($r)
	{
		$this->rol = $r;
	}

	function save()
	{
		$sql = 'Insert into usuario values(NULL, \'{$this->getNombre}\', \'{$this->getApellido}\', \'{$this->getEmail}\', , \'{$this->getPassword}\', \'user\', null)';

		if (($save = $this->db->query($sql)) == true) return true;
		return false;
	}
}
