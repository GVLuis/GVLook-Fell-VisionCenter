document.addEventListener('DOMContentLoaded', function() {
 
    // Autocomplete
    // ------------------------------

    // Add demo data
    var availableMail = [
        "gmail.com",
        "gmail.es",
        "hotmail.com",
        "hotmail.es",
        "outlook.com",
        "icloud.com",
    ];

    $("#popular_mails_A, #popular_mails_B").autocomplete({
    source: availableMail
    });
});