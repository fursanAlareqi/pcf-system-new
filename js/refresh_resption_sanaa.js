
$(document).ready(function() {
    cards.forEach(card => {
        const id = `#div_refresh_sanaa`;
        const file = `refresh/resption_sanaa.php`;
        
        $(id).load(file);
        setInterval(() => {
            $(id).load(file);
        }, 1000);
    });
});
