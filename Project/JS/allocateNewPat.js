function validate() {
  let pID = document.forms["test"]["pID"].value;
  let pName = document.forms["test"]["pName"].value;
  let type = document.forms["test"]["type"].value;
  let floorNo = document.forms["test"]["floorNo"].value;
  let wardNo = document.forms["test"]["wardNo"].value;
  let bedNo = document.forms["test"]["bedNo"].value;
  let cabinNo = document.forms["test"]["cabinNo"].value;
  let allDateTime = document.forms["test"]["allDateTime"].value;
  
  if (pID==""||pName==""||type==""||floorNo==""||allDateTime=="") {
    alert("All the fields must be filled out");
    return false;
  }
  if(type==0)
  {
	alert("Please select a type.")
	return false;  
  }
  if (type==1)
  {
	if(wardNo==""||bedNo=="")
	{
	alert("Ward and bed no required!")
	return false;
	}
  }
  else if(type==2)
  {
	if(cabinNo=="")
	{
	alert("Cabin no required!")
	return false;
	}
  }
}