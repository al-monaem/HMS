$("#edit").click(function(f){
	f.preventDefault();
  	$("#username").prop("readonly", false);
  	$("#password").prop("readonly", false);  	
  	$("#address").prop("readonly", false);
  	$("#contact").prop("readonly", false);  
  	$("#email").prop("readonly", false);  
}); 
$("#update").click(function(e){
        e.preventDefault(); 
        var id = $("#id").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var address = $("#address").val();        
        var contact = $("#contact").val();
        var email = $("#email").val();        
        //alert(uname);

        if(username=="" || password=="" ||address==""|| contact=="" ||email=="")
        {
            $("#msg").html('<small style="color:red;">All filed is required!</small>');
        }

        else
        {
            data = {username:username,password:password,address:address,contact:contact,email:email};

            $.ajax({

                url: "../Controller/editprofile_controller.php",
                method: "POST",
                data: JSON.stringify(data),
                success: function(data)
                {
                    $("#msg").html(data);
                }

            });
        }

    });
