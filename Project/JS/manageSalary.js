$(document).ready(function(){

	$("#search").click(function(e){
		e.preventDefault();

		var id = $("#id").val();
		sendReq(id);

	});

	$(".container-1a").on('click','.lbtn',function(e)
	{
		e.preventDefault();
		var id = this.id;
		sendReq(id);
	});

});

function sendReq(id)
{
	$.ajax({
		url: "../controller/manageSalaryController.php",
		method: 'GET',
		data: {id:id},
		success: function(data){
			if(data=="error")
			{
				var msg = '<small class="error">Invalid ID!</small>';
				$("#msg").html(msg);
				$("#msg").show();
				$(".table3").html("");
			}
			else
			{
				$("#msg").hide();
				$(".table3").html(data);
			}
		}
	});
}