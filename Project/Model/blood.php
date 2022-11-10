<?php
	class Blood
	{
		public $id;
		public $dName;
		public $bGroup;
		public $dcontact;
		public $daddress;
		public $demail;
		public $dgender;

		function __construct($dName, $bGroup, $dcontact, $daddress, $demail, $dgender)
		{
			$this->dName = $dName;
			$this->bGroup = $bGroup;
			$this->dcontact = $dcontact;
			$this->daddress = $daddress;
			$this->demail = $demail;
			$this->dgender = $dgender;
			$this->generateSerial();
		}
		function generateSerial()
		{
			$dataHandler = new UserDataHandler;
			$count = $dataHandler->countUser("../database/Nurse.json");

			$this->id = "S100-".($count+1);
		}
	}
?>