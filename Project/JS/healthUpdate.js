function validate() {
  let patId = document.forms["test"]["patId"].value;
  let patName = document.forms["test"]["patName"].value;
  let patGender = document.forms["test"]["patGender"].value;
  let bloodPressure = document.forms["test"]["bloodPressure"].value;
  let heartBeat = document.forms["test"]["heartBeat"].value;
  let pulse = document.forms["test"]["pulse"].value;
  let diabetes = document.forms["test"]["diabetes"].value;
  
  if(patId==""||patName==""||patGender==""||bloodPressure==""||heartBeat==""||pulse==""||diabetes==""){
    alert("All the fields must be filled out");
    return false;
  }
  else
  {
	  alert("Health checkup Successful!");
  }
}