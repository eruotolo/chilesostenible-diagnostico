// JQ CONDICIONAL SI UNA RESPUESTA SE RESPONDE CON SI O NO.
$("#seeAnotherField").change(function() {
    if ($(this).val() == "yes") {
        $('#otherFieldDiv').hide();
    } else {
        $('#otherFieldDiv').show();
    }
});

$("#seeAnotherField-1").change(function() {
    if ($(this).val() == "no") {
        $('#otherFieldDiv').show();
    } else {
        $('#otherFieldDiv').hide();
    }
});