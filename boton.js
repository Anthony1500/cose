function activarOpcion(elemento) {
    // Obtener todos los elementos li dentro de la lista de menú
    var elementosMenu = document.querySelectorAll('.menu li');
    
    // Desactivar la clase "active" en todos los elementos li
    elementosMenu.forEach(function(item) {
        item.classList.remove('active');
    });
    
    // Activar la clase "active" solo en el elemento li actual
    elemento.classList.add('active');
}