<?php
	class Allocation
	{
		public $pID;
		public $pName;
		public $type;
		public $floorNo;
		public $wardNo;
		public $bedNo;
		public $cabbinNo;
		public $allDateTime;

		function __construct($pID, $pName, $type, $floorNo, $wardNo, $bedNo, $cabbinNo, $allDateTime)
		{
			$this->pID = $pID;
			$this->pName = $pName;
			$this->type = $type;
			$this->floorNo = $floorNo;
			$this->wardNo = $wardNo;
			$this->bedNo = $bedNo;
			$this->cabbinNo = $cabbinNo;
			$this->allDateTime = $allDateTime;
		}
	}
?>