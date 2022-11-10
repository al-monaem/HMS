function validate() {
  let dName = document.forms["test"]["dName"].value;
  let bGroup = document.forms["test"]["bGroup"].value;
  let dcontact = document.forms["test"]["dcontact"].value;
  let daddress = document.forms["test"]["daddress"].value;
  let demail = document.forms["test"]["demail"].value;
  let dgender = document.forms["test"]["dgender"].value;
  
  if(dName==""||bGroup==""||dcontact==""||daddress==""||demail==""||dgender==""){
    alert("All the fields must be filled out");
    return false;
  }
  else
  {
	  alert("Registration Successful!");
	  clear()
	  {
		  dName="";
		  bGroup="";
		  dcontact="";
		  daddress="";
		  demail="";
		  dgender="";
	  }
  }
}
