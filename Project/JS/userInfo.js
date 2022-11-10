$(document).ready(function(){

	var msg = '<small class="error">Invalid ID!</small>';
	$("#msg").html(msg);
	$("#msg").hide();

	$("#search").click(function(e){
		e.preventDefault();

		var id = $("#id").val();
		sendReq(id);
	});

	$(".container-1a").on('click','.lbtn',function(e){
		e.preventDefault();
		sendReq(this.id);
	});

	$(".container-1a").on('click','.archive',function(e){
		e.preventDefault();

		if(confirm('Do you wish to archive this user?')){
			$.ajax({
				url: "../controller/userInfoController.php",
				method: 'POST',
				data: {function:"archive", id: this.id},
				success: function(data){
					alert(data);
				}
			});
		}
	});

});

function sendReq(id)
{
	$.ajax({
		url: "../controller/userInfoController.php",
		method: 'GET',
		data: {id:id},
		success: function(data){
			if(data=="error")
			{
				$("#msg").show();
				$("#userDetails").html("");
			}
			else
			{
				$("#msg").hide();
				$("#userDetails").html(data);
			}
		}
	});
}