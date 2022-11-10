$(document).ready(function(){

	loadAdmins();

	function loadAdmins(){
		//console.log("called");
		$.ajax({
			url: "../Controller/registerAdminController.php",
			method: "GET",
			data: "function=load",
			success: function(data){
				$("#adminList").html(data);
			}
		});
	}

	$("#register").click(function(e){
		e.preventDefault();

		var id = $("#id").val();
		var uname = $("#username").val();
		var pass = $("#password").val();
		var gender = $("#gender").val();
		var age = $("#age").val();
		var address = $("#address").val()
		var fname = $("#fname").val();
		var mname = $("#mname").val();
		var lname = $("#lname").val();
		var nid = $("#nid").val();
		var contact = $("#contact").val();
		var email = $("#email").val();
		var registeredBy = $("#userid").text();

		if(uname=="" || pass=="" || gender=="" || age=="" || address=="" || 
			fname=="" || lname=="" || nid=="" || contact=="" || email=="")
		{
			$("#msg").html('<small style="color:red;">All filed is required!</small>');
		}
		else
		{
			$.ajax({
				url: "../Controller/registerAdminController.php",
				method: 'POST',
				data: {id:id, uname:uname, pass:pass, gender:gender, age:age, address:address, fname:fname,
						mname:mname, lname:lname, nid:nid, contact:contact, email:email,
						registeredBy:registeredBy, userType:"Admin", image:null},
				success: function(data)
				{
					$("#msg").html(data);
					loadAdmins();
					$("#form")[0].reset();
				}

			});
		}

	});
});



// function Validate()
// {
// 	var uname = $("username");
// 	var pass = $("password");
// 	var gender = $("gender");
// 	var age = $("age");
// 	var address = $("address");
// 	var fname = $("fname");
// 	var mname = $("mname");
// 	var lname = $("lname");
// 	var nid = $("nid");
// 	var contact = $("contact");
// 	var email = $("email");

// 	if(uname.value=="" || pass.value=="" || gender.value=="" || age.value=="" || address.value=="" || 
// 		fname.value=="" || lname.value=="" || nid.value=="" || contact.value=="" || email.value=="")
// 	{
// 		console.log("asd");
// 		$("msg").innerHTML = "All fields are required!";
// 		$("msg").style.color = "red";
// 		return false;
// 	}
// 	else
// 	{
// 		console.log("asd");
// 		return true;
// 	}
// }

// function Clear()
// {
// 	$("msg").innerHTML = "";
// 	$("username").value = "";
// 	$("password").value = "";
// 	$("gender").value = "";
// 	$("age").value = "";
// 	$("address").value = "";
// 	$("fname").value = "";
// 	$("mname").value = "";
// 	$("lname").value = "";
// 	$("nid").value = "";
// 	$("contact").value = "";
// 	$("email").value = "";
// }