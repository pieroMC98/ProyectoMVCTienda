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

	function getPassword()
	{
		return password_hash($this->db->real_escape_string((string) $this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	}
	function setPassword(string $s)
	{
		$this->password = $s;
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
		return 	$this->rol;
	}
	function  setRol($r)
	{
		$this->rol = $r;
	}

	function save()
	{
		$sql = "Insert into usuarios values(NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getEmail()}','{$this->getPassword()}', 'user', null)";
		if ($this->db->query($sql)) return true;
		return false;
	}

	function login($email, $password)
	{
		$this->setEmail($email);
		$this->setPassword($password);

		$sql = "select * from usuarios where email = '{$this->email}'";

		$login = $this->db->query($sql);

		if ($login && $login->num_rows == 1) {
			$user = $login->fetch_object();
			if (password_verify($this->password, $user->password) == true)
				return $user;
		}
		return null;
	}
}
