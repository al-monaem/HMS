$(document).ready(function(){
	load();
});

function load()
{
	var id = $("#search").val();
	if(id == "")
	{
		$.ajax({
			url: '../controller/archivedUsersController.php',
			data: {id:""},
			method: 'GET',
			success: function(data)
			{
				$("#records").html(data);
			}
		});
	}
	else
	{
		$.ajax({
			url: '../controller/archivedUsersController.php',
			data: {id:id},
			method: 'GET',
			success: function(data)
			{
				$("#records").html(data);
			}
		});
	}
}


function search()
{
	load();
}