<?php
	class NewPatient
	{
		public $id;
		public $pName;
		public $nppassword;
		public $contact;
		public $contactNo;
		public $email;
		public $address;
		public $occupation;
		public $gender;

		function __construct($pName, $nppassword, $contact, $contactNo, $email, $address, $occupation, $gender)
		{
			$this->pName = $pName;
			$this->nppassword = $nppassword;
			$this->contact = $contact;
			$this->contactNo = $contactNo;
			$this->email = $email;
			$this->address = $address;
			$this->occupation = $occupation;
			$this->gender = $gender;
			$this->generateID();
		}

		function generateID()
		{
			$dataHandler = new UserDataHandler;
			$count = $dataHandler->countUser("../database/NewPatient.json");

			$this->id = "P-".($count+1);
		}
	}
?>