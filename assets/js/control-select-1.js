// JQ CONTROLA LA CANTIDAD DE ITEMS A SELECCIONAR CAMBIANDO EL VALOR EN EL SEGUNDO IF.
function chkcontrol(j) {
    var total = 0;
    for (var i = 0; i < document.form1.ckb.length; i++) {
        if (document.form1.ckb[i].checked) {
            total = total + 1;
        }
        if (total > 1) {
            alert("Por favor seleccione una sola opción")
            document.form1.ckb[j].checked = false;
            return false;
        }
    }
}