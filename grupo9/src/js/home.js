function bttInt(){
    var lista_int = document.getElementById("listaInt");
    var lista_dias = document.getElementById("listaDias");
    
    if(lista_int.style.display == "none") {
        lista_int.style.display = "block";
        lista_dias.style.display = "none";
    }
    else lista_int.style.display = "none";
}

function bttDias(){
    var lista_dias = document.getElementById("listaDias");
    var lista_int = document.getElementById("listaInt");
    
    if(lista_dias.style.display == "none") {
        lista_dias.style.display = "block";
        lista_int.style.display = "none";
    }
    else lista_dias.style.display = "none";
}
