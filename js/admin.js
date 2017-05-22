
$(document).ready(function(){
    $("#pending").on('click', function(){
      $("#complaint").show(); 
      $("#registration").hide();
    });
});



$(document).ready(function () {
    $("#reg").on('click', function () {
        $("#registration").show();
        $("#complaint").hide();
        

    });
});