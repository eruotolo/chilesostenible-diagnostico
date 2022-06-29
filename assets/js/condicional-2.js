// JQ PERMITE QUE UNA SOLA OPCIÓN SEA LA SELECCIONADA PARA EL CONDICIONAL (condicional-1.js).
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

function onlyOneSecond(checkbox){
    var checkboxes = document.getElementsByName('checkSecond')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

function onlyOneThrid(checkbox){
    var checkboxes = document.getElementsByName('checkThird')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}