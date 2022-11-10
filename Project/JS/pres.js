function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}
$(document).ready(function(){

    var i = 0;

    $("#add").click(function(e){
    e.preventDefault();
      i++;
      $('#meds').append('<div id="t"><label class="label">Medicine'+i+':</label><input style="width:25%;" class="text-box" type="text" placeholder="Medicine" oninput="this.value = this.value.toUpperCase()" name="med[]" id="med'+i+'"><input style="width:35%;" class="text-box" type="text" placeholder="Dosage ex 1+1+1" name="dos[]" id="dos'+i+'"><button type="button" name="remove" class="test" id="'+i+'">Delete</button><br></div>');  
    });

    $(document).on('click', '.test', function(){  
      //var button_id = $(this).attr("id"); 
      //console.log(button_id); 
      //$('#meds').last().remove();  
      $("#meds div:last-child").remove(); //---work
    });

    $("#submit").on('click',function(a){
      a.preventDefault();
        //var formdata = $("#form").serialize();
        //var values = $(this).serialize();
        //inputs={};
        //console.log(formdata);
        var ap_id = $("#ap_id").val();
        var remarks = $("#remarks").val();
        var med = $('input[name^=med]').map(function(idx, elem) {
            return $(elem).val();
          }).get();
        var dos = $('input[name^=dos]').map(function(idx1, elem1) {
            return $(elem1).val();
          }).get();
        var fmed = med.toString();
        var fdos = dos.toString();
        //console.log(fmed.substring(0));
        if(ap_id=="" || remarks=="" || fmed.substring(0)=="" || fdos.substring(0)=="")
        {
            $("#msg").html('<small style="color:red;">All filed is required!</small>');
        }
        
        else
        {
          data = {ap_id:ap_id,remarks:remarks,med:fmed,dos:fdos};
          $.ajax({
          url   :"../controller/prescription_controller.php",
          type  :"POST",
          data  :JSON.stringify(data),
          success:function(data){
            //alert(result);
            $("#form")[0].reset();
            $("#msg").html(data);
            
          }
      });
      }

    });
  });