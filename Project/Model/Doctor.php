<?php
	
	class Doctor
	{
		public $id;
		public $uname;
		public $email;
		public $gender;
		public $password;
		public $salary;
		public $designation;
		public $address;
		public $specialization;

		function __construct($uname, $password, $email, $contact, $address, $gender)
		{
			//$this->id = $id;
			$this->uname = $uname;
			$this->password = $password;
			$this->email = $email;
			$this->gender = $gender;
			$this->salary = 80000;
			$this->contact = $contact;
			$this->address = $address;
			$this->designation = get_class($this);
			//$this->availTime = $availTime;
			$this->generateID();
			$this->specialization = "";
		}

		function generateID()
		{
			$dataHandler = new UserDataHandler;
			$count = $dataHandler->countUser("../database/Doctors.json");

			$this->id = "D-".($count+1);
		}

		function createExistingUser($id, $uname, $password, $email, $contact, $address, $gender, $salary, $specialization)
		{
			$this->id = $id;
			$this->uname = $uname;
			$this->password = $password;
			$this->email = $email;
			$this->gender = $gender;
			$this->salary = 80000;
			$this->contact = $contact;
			$this->address = $address;
			$this->designation = get_class($this);
			$this->salary = $salary;
			$this->specialization = $specialization;

			return $this;
		}

		function showDetails()
		{
			echo '<table style="width:100%">
					<tr>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Username: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->uname.'" disabled>
									</td>
								</tr>
							</table>
						</td>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Email: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->email.'" disabled>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Contact: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->contact.'" disabled>
									</td>
								</tr>
							</table>
						</td>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Address: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->address.'" disabled>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Gender: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->gender.'" disabled>
									</td>
								</tr>
							</table>
						</td>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Salary: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->salary.'" disabled>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width:50%">
							<table>
								<tr>
									<td style="text-align:right; width:40%">
										<label>Specialization: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->specialization.'" disabled>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div style="margin-left:300px">
					<img src="" onerror=this.src="../images/default.png" width="100px" height="100px">
				</div>';
		}
	}
?>