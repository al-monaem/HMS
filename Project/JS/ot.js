$("#submit").click(function(e){
        e.preventDefault();
        var pid = $("#pid").val();
        var otid = $("#otid").val();
        //var fields = $("input[name='Equipments[]']").serializeArray();
        var eq = $('input[name^="Equipments[]"]').map(function () {
            if ($(this).is(':checked')) {
                return $(this).val();
            }
        }).get();
       // console.log(eq);

        if(pid=="" || otid=="" ||eq=="")
        {
            $("#msg").html('<small style="color:red;">All filed is required!</small>');
        }

        else
        {
            test=eq.toString();
            //console.log(test);
            data = {pid:pid,otid:otid,Equipments:test};

            $.ajax({

                url: "../Controller/otinitiate_controller.php",
                method: "POST",
                data: JSON.stringify(data),
                success: function(data)
                {
                    $("#msg").html(data);
                }

            });
        }

    });
