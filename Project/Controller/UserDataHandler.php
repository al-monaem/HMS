<?php

include '../Model/Admin.php';
include '../Model/Doctor.php';
include '../Model/Nurse.php';
include 'Database.php';

class UserDataHandler
{
	private $db;
	private $conn;

	function __construct()
	{
		$this->db = new Database;
		$this->conn = $this->db->getConnection();
	}

	public function writeJSON($file, $object)
	{
		$f = fopen($file, 'w');
		fwrite($f, json_encode($object));
		fclose($f);
	}
	public function readJSON($file)
	{
		//return a array
		$data = json_decode(file_get_contents($file), true);
		return $data;
	}
	public function countUser($file)
	{
		$data = $this->readJSON($file);
		return count($data);
	}
	public function log($data)
	{
		$file = fopen("log.txt", 'a');
		fwrite($file, $data);
		fclose($file);
	}
	function generateIDJSON($file)
	{
		$count = $this->countUser($file);

		return ("A-".($count+1));
	}
	public function getUser($userid)
	{
		$file = "../view/log.txt";
		$d = substr($userid, 0, 1);

		if($d == "A")
		{
			$file = "../database/admins.json";
		}
		else if($d == "D")
		{
			$file = "../database/doctors.json";
		}
		else if($d == "N")
		{
			$file = "../database/nurse.json";
		}
		else
		{
			return null;
		}
		$data = json_decode(file_get_contents($file), true);

		foreach ($data as $key) 
		{
			if($key["id"] == $userid && $d == "A")
			{
				$admin = new Admin($key["id"],$key["uname"],$key["password"],$key["fname"],$key["mname"],$key["lname"],$key["address"],$key["email"],$key["gender"],$key["contact"],$key["nid"],$key["age"],$key["registeredBy"]);

				return $admin;
			}
			else if($key["id"] == $userid && $d == "D")
			{
				$doctor = new Doctor($key["uname"],$key["password"],$key["email"],$key["contact"],$key["address"],$key["gender"]);
				$doctor = $doctor->createExistingUser($key["id"],$key["uname"],$key["password"],$key["email"],$key["contact"],$key["address"],$key["gender"],$key["salary"],$key["specialization"]);

				return $doctor;
			}
			else if($key["id"] == $userid && $d == "N")
			{
				/*$doctor = new Doctor($key["uname"],$key["password"],$key["email"],$key["contact"],$key["address"],$key["gender"]);
				$doctor = $doctor->createExistingUser($key["id"],$key["uname"],$key["password"],$key["email"],$key["contact"],$key["address"],$key["gender"],$key["salary"],$key["specialization"]);

				return $doctor;*/
			}
		}

		return null;
	}
	public function updateUser($user)
	{
		$d = substr($user->id, 0, 1);

		if($d == "D")
		{
			$file = "../database/doctors.json";
		}
		else
		{
			return false;
		}
		$data = json_decode(file_get_contents($file), true);
		$newData = [];

		foreach ($data as $key)
		{
			if($key["id"] == $user->id)
			{
				$newData[] = $user;
				continue;
			}
			$newData[] = $key;
		}

		$this->writeJSON($file, $newData);
		return true;
	}
	public function insert($query)
	{
		if($this->conn == null)
		{
			return false;
		}

		if($this->conn->query($query))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function load($query)
	{
		if($this->conn == null)
		{
			return null;
		}
		$result = $this->conn->query($query);

		if($result->num_rows>0)
		{
			return $result;
		}
		else
		{
			return null;
		}
	}
	public function getRecord($query)
	{
		if($this->conn == null)
		{
			return null;
		}
		$result = $this->conn->query($query);
		
		if($result == null)
		{
			return null;
		}
		return $result;
	}
	function generateID($userType)
	{
		if($userType == "A")
		{
			$query = "select * from Admins ORDER BY SUBSTR(id FROM 1 FOR 2), CAST(SUBSTR(id FROM 2) AS UNSIGNED) LIMIT 1";
			$result=$this->conn->query($query);
			$row = $result->fetch_assoc();

			$id = $row["id"];
			$id = substr($id, 2);

			return ("A-".((int)$id+1));
		}
	}
	public function getMultipleRecords(...$queries)
	{
		$data = array();
		foreach ($queries as $query) {
			$result = $this->getRecord($query);

			if($result!=null)
			{
				$data[] = $result;
			}
		}

		return $data;
	}
	public function updateRecord($query)
	{
		return $this->conn->query($query);
	}

	public function deleteRecord($query)
	{
		return $this->conn->query($query);
	}
	public function del($query)
	{
		if($this->conn == null)
		{
			return null;
		}
		if($this->conn->query($query))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function calculateFee($meds)
	{
		$fee = 0;
		$medlist = explode(",", $meds);
		//$dosageList = explode(",", $dosage);

		//$i=0;
		foreach($medlist as $med) 
		{
			//$d = $dosageList[$i++];
			//$dd = explode("+", $d)
			if($med == "Napa")
			{
				$fee += 10;
			}
			if($med == "Ace")
			{
				$fee += 20;
			}
		}
		return $fee;
	}
	
	function generateDID()
	{
		$query = "select * from doctors ORDER BY SUBSTR(id FROM 1 FOR 2), CAST(SUBSTR(id FROM 2) AS UNSIGNED) LIMIT 1";
		$result=$this->conn->query($query);
		$row = $result->fetch_assoc();

		$id = $row["id"];
		$id = substr($id, 2);

		return ("D-".((int)$id+1));
	}
	function generateNID()
	{
		$query = "select * from nurses ORDER BY SUBSTR(id FROM 1 FOR 2), CAST(SUBSTR(id FROM 2) AS UNSIGNED) LIMIT 1";
		$result=$this->conn->query($query);
		$row = $result->fetch_assoc();

		$id = $row["id"];
		$id = substr($id, 2);

		return ("N-".((int)$id+1));
	}
	function generatePID()
	{
		$query = "select * from patients ORDER BY SUBSTR(id FROM 1 FOR 2), CAST(SUBSTR(id FROM 2) AS UNSIGNED) LIMIT 1";
		$result=$this->conn->query($query);
		$row = $result->fetch_assoc();

		$id = $row["id"];
		$id = substr($id, 2);

		return ("P-".((int)$id+1));
	}
	function generateDonorID()
	{
		$query = "select * from blood ORDER BY SUBSTR(bid FROM 1 FOR 2), CAST(SUBSTR(bid FROM 2) AS UNSIGNED) LIMIT 1";
		$result=$this->conn->query($query);
		$row = $result->fetch_assoc();

		$id = $row["bid"];
		$id = substr($id, 2);

		return ("B-".((int)$id+1));
	}
}

?>