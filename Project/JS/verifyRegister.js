function validate()
{
	var r_uname = $("#username").val();
  	var r_email = $("#email").val();
  	var r_password = $("#password").val();
  	var r_cpassword = $("#cpassword").val();
  	var r_contact = $("#contact").val();
  	var r_address = $("#address").val();
  	var r_designation = $("#designation").val();
  	var r_agree = $("#agree").val();
  	var r_gender = $("input[name='gender']:checked").val();

  	if(r_uname==""||r_email==""||r_password==""||r_cpassword==""||r_contact==""||r_address==""||
  		r_designation==""||r_agree==""||r_gender=="")
  	{
  		$("#msg").html("All fields are required!");
  		return false;
  	}
  	if(r_password != r_cpassword)
  	{
  		$("#msg").html("All fields are required!");
  		return false;
  	}

  	return true;
}