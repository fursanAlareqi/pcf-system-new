$(document).ready(function(){
    $("#div_refresh_Doctor_taiz").load("refresh/resption_Doctor_taiz.php");
    setInterval(function() {
        $("#div_refresh_Doctor_taiz").load("refresh/resption_Doctor_taiz.php");
    }, 1000);
});