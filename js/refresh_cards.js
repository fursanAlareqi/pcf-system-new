const cards = [
    { name: "ab", table: "resption" },
    { name: "aden", table: "resption" },
    { name: "taiz", table: "resption" },

    { name: "aden", table: "psyshological" },
    { name: "ab", table: "psyshological" },
    { name: "taiz", table: "psyshological" },

    { name: "aden", table: "doctor" },
    { name: "ab", table: "doctor" },
    { name: "taiz", table: "doctor" },

    { name: "taiz", table: "case_stude" },
    { name: "ab", table: "case_stude" },
    { name: "aden", table: "case_stude" },

    
];

$(document).ready(function() {
    cards.forEach(card => {
        const id = `#div_refresh_${card.table}_${card.name}`;
        const file = `refresh/${card.table}_${card.name}.php`;
        
        $(id).load(file);
        setInterval(() => {
            $(id).load(file);
        }, 1000);
    });
});
