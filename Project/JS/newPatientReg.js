function validate(){
  let pName = $("#pName").val();
  let nppassword = $("#nppassword").val();
  let cpassword = $("#cpassword").val();
  let npContact = $("#npContact").val();
  let contactNo = $("#contactNo").val();
  let npAge = $("#npAge").val();
  let npEmail = $("#npEmail").val();
  let npAddress = $("#npAddress").val();
  let occupation = $("#occupation").val();
  let npGender = $("input[name='npGender']:checked").val();
  //let pName = document.forms["test"]["pName"].value;
  /*let nppassword = document.forms["test"]["nppassword"].value;
  let cpassword = document.forms["test"]["cpassword"].value;
  let npContact = document.forms["test"]["npContact"].value;
  let contactNo = document.forms["test"]["contactNo"].value;
  let npAge = document.forms["test"]["npAge"].value;
  let npEmail = document.forms["test"]["npEmail"].value;
  let npAddress = document.forms["test"]["npAddress"].value;
  let occupation = document.forms["test"]["occupation"].value;
  let npGender = document.forms["test"]["npGender"].value;*/

  if(pName==""||nppassword==""||cpassword==""||npContact==""||contactNo==""||
  npAge==""|| npEmail==""||npAddress==""||occupation==""||npGender=="")
  {
    alert("All the fields must be filled out");
    return false;
  }
  if(cpassword!=nppassword)
  {
	 alert("Password dont match");
	 return false;
  }
  else
  {
	  alert("Registration Successful!");
	  clear()
	  {
		pName="";
		nppassword="";
		cpassword="";
		npContact="";
		contactNo="";
		npAge="";
		npEmail="";
		npAddress="";
		occupation="";
		npGender="";
	  }
  }
}
