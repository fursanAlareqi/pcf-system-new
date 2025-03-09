$(document).ready(function(){
    $("#div_refresh_Doctor_ab").load("refresh/resption_Doctor_ab.php");
    setInterval(function() {
        $("#div_refresh_Doctor_ab").load("refresh/resption_Doctor_ab.php");
    }, 1000);
});