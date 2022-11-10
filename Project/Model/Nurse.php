<?php
	class Nurse
	{
		public $id;
		public $uname;
		public $password;
		public $contact;
		public $address;
		public $email;
		public $gender;
		public $designation;
		public $salary;


		function __construct($uname, $email, $password, $contact, $address, $gender)
		{
			$this->uname = $uname;
			$this->email = $email;
			$this->password = $password;
			$this->contact = $contact;
			$this->address = $address;
			$this->gender = $gender;
			$this->generateID();
			$this->designation = get_class($this);
			$this->salary = 60000;
		}

		function generateID()
		{
			$dataHandler = new UserDataHandler;
			$count = $dataHandler->countUser("../database/Nurse.json");

			$this->id = "N-".($count+1);
		}
	}
?>