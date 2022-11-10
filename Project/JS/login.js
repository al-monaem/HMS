$(document).ready(function(){
	$("#iderror").hide();
	$("#passerror").hide();
})

function Validate()
{
	var id=document.getElementById("id");
	var password=document.getElementById("password");

	if(id.value=="" && password.value=="")
	{
		$("#iderror").show();
		$("#passerror").show();
		return false;
	}
	else if(id.value=="")
	{
		$("#iderror").show();
		$("#passerror").hide();
		return false;
	}
	else if(password.value=="")
	{
		$("#iderror").hide();
		$("#passerror").show();
		return false;
	}
	else
	{
		$("#iderror").hide();
		$("#passerror").hide();
		return true;
	}
}