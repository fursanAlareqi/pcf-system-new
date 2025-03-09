$(document).ready(function(){
    $("#div_refresh_psyshological_ab").load("refresh/resption_psyshological_ab.php");
    setInterval(function() {
        $("#div_refresh_psyshological_ab").load("refresh/resption_psyshological_ab.php");
    }, 1000);
});