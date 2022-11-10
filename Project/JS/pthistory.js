$(document).ready(function(){
  refreshTable();
});

function refreshTable(){
    $('#live_data').load('../controller/pthistory_controller.php', function(){
       setTimeout(refreshTable, 10000);
    });
}