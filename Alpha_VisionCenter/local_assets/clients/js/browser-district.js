document.addEventListener('DOMContentLoaded', function() {
 
    // Autocomplete
    // ------------------------------

    // Add demo data
    var availableDistrito = [
        "Distrito 1",
        "Distrito 2",
        "Distrito 3",
        "Región 1",
        "Región 2",
        "Región 3",
        "Zona 1",
        "Zona 2",
        "Zona 3",
        "Comodin"
    ];

    $("#distrito_A, #distrito_B").autocomplete({
    source: availableDistrito
    });
});