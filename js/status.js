$(document).ready(function () {


    $('#check').on('click', function () {
        var selected = $('#comp_id').val();




        $.ajax({
            url: "getdata.php",
            method: "POST",
            data: {
                "comp_id": selected

            },

            success: function (data, textStatus, jqXHR) {
                console.log("success");
                console.log(data);
                $('#tab').show();
                $('#tabl').html(data);






            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
            }
        });

    });
});