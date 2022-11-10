$(document).ready(function(){

	loadDoctors();
	loadNurses();
});

function loadDoctors()
{
	$.ajax({
		url: "../controller/sessionLogsController.php",
		method: "GET",
		data: {type: "doctor"},
		success: function(data){
			$("#doctor").html(data);
		}
	});
}

function loadNurses()
{
	$.ajax({
		url: "../controller/sessionLogsController.php",
		method: "GET",
		data: {type: "nurse"},
		success: function(data){
			$("#nurse").html(data);
		}
	});
}