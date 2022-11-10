$("#submit").click(function(e){
        e.preventDefault();
        var availdate = $("#availdate").val();
        var availTime = $("input[name='availTime']:checked").val();
        //var otid = $("#otid").val();
        //var fields = $("input[name='Equipments[]']").serializeArray();
        //2022-04-13
        fyr = availdate.substring(0,4);
        fmm = availdate.substring(5,7);
        fdd = availdate.substring(8,10);
        favaildate = fdd+"-"+fmm+"-"+fyr;
        if(favaildate=="" || availTime=="")
        {
            $("#msg").html('<small style="color:red;">All filed is required!</small>');
        }

        else
        {
            //console.log(test);
            data = {availdate:favaildate,availTime:availTime};

            $.ajax({

                url: "../Controller/availableinfo_controller.php",
                method: "POST",
                data: JSON.stringify(data),
                success: function(data)
                {
                    $("#msg").html(data);
                }

            });
        }

    });
