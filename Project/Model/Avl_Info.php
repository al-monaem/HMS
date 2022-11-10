<?php
	
	class AvailableInfo
	{
		public $id;
		public $availTime;
		function __construct($id, $availTime,$availdate)
		{
			$this->availTime = $availTime;
			$this->id = $id;
			$this->availdate = $availdate;
		}
	}

?>