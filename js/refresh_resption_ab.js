$(document).ready(function(){
    $("#div_refresh_ab").load("refresh/resption_ab.php");
    setInterval(function() {
        $("#div_refresh_ab").load("refresh/resption_ab.php");
    }, 1000);
});