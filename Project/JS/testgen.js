$("#submit").click(function(e){
        e.preventDefault();
        var pid = $("#pid").val();
        var tn = $('input[name^="Testname[]"]').map(function () {
            if ($(this).is(':checked')) {
                return $(this).val();
            }
        }).get();
       // console.log(eq);

        if(pid=="" || tn=="")
        {
            $("#msg").html('<small style="color:red;">All filed is required!</small>');
        }

        else
        {
            test=tn.toString();
            //console.log(test);
            data = {pid:pid,Testname:test};

            $.ajax({

                url: "../Controller/testgen_.php",
                method: "POST",
                data: JSON.stringify(data),
                success: function(data)
                {
                    $("#msg").html(data);
                }

            });
        }

    });
