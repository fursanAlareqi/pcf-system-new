$(document).ready(function(){
    $("#div_refresh_psyshological_taiz").load("refresh/resption_psyshological_taiz.php");
    setInterval(function() {
        $("#div_refresh_psyshological_taiz").load("refresh/resption_psyshological_taiz.php");
    }, 1000);
});