<?php

class Database
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $db = "HMS";

	public function getConnection()
	{
		$con = new mysqli($this->servername, $this->username, $this->password, $this->db);
		if($con->connect_error)
		{
			return null;
		}

		return $con;
	}
}

?>