$(document).ready(function(){
  refreshTable();
});

function refreshTable(){
    $('#live_data').load('../controller/apptarchive_.php', function(){
       setTimeout(refreshTable, 10000);
    });
}