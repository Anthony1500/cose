window.onload = function() {
    // Cargar el contenido de la página PHP en el div de contenido
    cargarContenido('mi_pagina.php', 'contenido');
};

function cargarContenido(url, idContenedor) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(idContenedor).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

