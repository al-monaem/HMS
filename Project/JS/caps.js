function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}
//	var i = 2;
//$(document).ready(function(){
//  $("#form").on('click','#add',function(e){
//	e.preventDefault();
//	var test = document.getElementById("meds").innerHTML;
//	document.getElementById("meds").innerHTML = test+'<div><label class="label">Medicine '+i+':</label><br><input class="text-box" type="text" id="med'+i+'"></div>';
//	i++;
//});

//});

$(document).ready(function(){

    var i = 0;

    $("#add").click(function(e){
    e.preventDefault();
      i++;
      $('#meds').append('<div><label class="label">Medicine'+i+':</label><input style="width:30%;" class="text-box" type="text" name="med[]" id="med'+i+'"><input style="width:30%;" class="text-box" type="text" name="dos[]" id="dos'+i+'"><button type="button" name="remove" class="test" id="'+i+'">Delete</button><br></div>');  
    });

    $(document).on('click', '.test', function(){  
      var button_id = $(this).attr("id"); 
      //console.log(button_id); 
      //$('#meds').last().remove();  
      $("#meds div:last-child").remove()
    });

    $("#submit").on('click',function(){
      var formdata = $("#form").serialize();
      $.ajax({
        url   :"../controller/prescription_controller.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#form")[0].reset();
        }
      });
    });
  });