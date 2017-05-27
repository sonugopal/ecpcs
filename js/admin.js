
$(document).ready(function(){
    $("#pendingb").on('click', function(){
      $("#pending").show(); 
      $("#all").hide();
    });
});



$(document).ready(function () {
    $("#show").on('click', function () {
        $("#all").show();
        $("#pending").hide();
        

    });
});