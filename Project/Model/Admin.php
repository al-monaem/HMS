<?php
	
	class Admin
	{
		public $id;
		public $uname;
		public $email;
		public $gender;
		public $password;
		public $age;
		public $fname;
		public $mname;
		public $lname;
		public $contact;
		public $nid;
		public $address;
		public $registeredBy;
		public $userType;
		public $image;

		function __construct($id, $uname, $password, $fname, $mname, $lname, $address, $email, $gender, $contact, $nid, $age, $registeredBy)
		{
			$this->id = $id;
			$this->uname = $uname;
			$this->password = $password;
			$this->email = $email;
			$this->gender = $gender;
			$this->fname = $fname;
			$this->mname = $mname;
			$this->lname = $lname;
			$this->address = $address;
			$this->contact = $contact;
			$this->nid = $nid;
			$this->age = $age;
			$this->registeredBy = $registeredBy;
			$this->userType = get_class($this);
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
										<label>Full Name: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->fname." ".$this->lname.'" disabled>
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
										<label>NID: </label>
									</td>
									<td>
										<input id="text-box" class="text" type="text" value="'.$this->nid.'" disabled>
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