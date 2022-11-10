$("#edit").click(function(f){
	f.preventDefault();
	
  	$("#pID").prop("readonly", false);
  	$("#pName").prop("readonly", false);
  	$("#nppassword").prop("readonly", false);  	
  	$("#npContact").prop("readonly", false);
  	$("#contactNo").prop("readonly", false);  
  	$("#npEmail").prop("readonly", false);  
  	$("#npAddress").prop("readonly", false);  
  	$("#occupation").prop("readonly", false);  
}); 
$("#update").click(function(e){
        e.preventDefault();
		
		var pId = $("#pID").val();
        var pName = $("#pName").val();
        var nppassword = $("#nppassword").val();		
        var npContact = $("#npContact").val();     
        var contactNo = $("#contactNo").val();     
        var npEmail = $("#npEmail").val();     
        var npAddress = $("#npAddress").val();     
        var occupation = $("#occupation").val();     
        if(pName=="" || nppassword=="" ||npContact==""|| contactNo=="" ||npEmail==""||npAddress==""||occupation=="")
        {
            $("#msg").html('<small style="color:red;">All filed is required!</small>');
        }

        else
        {
            data = {pName:pName,nppassword:nppassword,npContact:npContact,contactNo:contactNo,npEmail:npEmail,npAddress:npAddress,occupation:occupation};

            $.ajax({

                url: "../Controller/editPatDetailsController.php",
                method: "POST",
                //data: JSON.stringify(data),
				data: {pId:pId, pName:pName,nppassword:nppassword,npContact:npContact,contactNo:contactNo,npEmail:npEmail,npAddress:npAddress,occupation:occupation},
                success: function(data)
                {
                    $("#msg").html(data);
                }

            });
        }

});
