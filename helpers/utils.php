<?php
class Utils
{
	static function deleteSession($name)
	{
		if (isset($name)) {
			echo 'set';
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		return $name;
	}
}
