$(document).ready(function(){
    $("#div_refresh_Case_stude_taiz").load("refresh/resption_Case_stude_taiz.php");
    setInterval(function() {
        $("#div_refresh_Case_stude_taiz").load("refresh/resption_Case_stude_taiz.php");
    }, 1000);
});