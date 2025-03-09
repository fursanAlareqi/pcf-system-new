$(document).ready(function(){
    $("#div_refresh_Case_stude_ab").load("refresh/resption_Case_stude_ab.php");
    setInterval(function() {
        $("#div_refresh_Case_stude_ab").load("refresh/resption_Case_stude_ab.php");
    }, 1000);
});