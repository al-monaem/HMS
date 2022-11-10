$(document).ready(function(){

	$("#msg").hide();
	$("#image").hide();
	$("#updatemsg").hide();

	$("#search").click(function(e){
		e.preventDefault();

		var id = $("#id").val();

		if(id.substr(0,1) != "D")
		{
			$("#msg").show();
			$("#msg").html('<small class="error">Invalid ID!</small>');
			$("#image").hide();
			$("#content").html("");
			$("#updatemsg").hide();
		}
		else
		{
			$("#msg").hide();

			$.ajax({
				url: "../Controller/editDoctorsController.php",
				method: 'GET',
				data: {id: id},
				success: function(data){
					if(data == "error"){
						$("#msg").show();
						$("#msg").html('<small class="error">Invalid ID!</small>');
						$("#image").hide();
						$("#content").html("");
						$("#updatemsg").hide();
					}
					else{
						$("#image").html(data);
						$("#image").show();
						$("#content").html("");
						$("#updatemsg").hide();
					}
				}
			});
		}
	});

	$("#image").on('click', '.edit', function(e) {
        e.preventDefault();
		sendReq(this.id);
    });

    $(".container-2a").on('click','.lbtn',function(e){
    	e.preventDefault();
    	$("#msg").hide();
    	sendReq(this.id);
    });

    $(".container-2b").on('click','.add',function(e){
    	e.preventDefault();
    	var id = this.id;
    	var s = $("#text").val();
    	$.ajax({
    		url: "../Controller/editDoctorsController.php",
			method: 'POST',
			data: {function: "update", id:id, specialization: s},
			success: function(data){
				$("#updatemsg").html(data);
				$("#updatemsg").show();
				sendReq(id);
			}
    	});
    });

});

function sendReq(id)
{
	$.ajax({
		url: "../Controller/editDoctorsController.php",
		method: 'GET',
		data: {function: "load", id:id},
		success: function(data){
			$("#content").html(data);
		}
	});
}