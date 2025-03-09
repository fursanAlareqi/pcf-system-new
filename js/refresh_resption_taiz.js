$(document).ready(function () {
    $("#div_refresh_taiz").load("refresh/resption_taiz.php");
    setInterval(function () {
        $("#div_refresh_taiz").load("refresh/resption_taiz.php");
    }, 1000);
});