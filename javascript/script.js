function mostrarFechaHora() {
  const fechaHoraElemento = document.getElementById('fecha-hora');
  const ahora = new Date();

  const fecha = ahora.toLocaleDateString('es-ES');
  const hora = ahora.toLocaleTimeString('es-ES');

  const fechaHoraTexto = `Fecha: ${fecha}, Hora: ${hora}`;
  fechaHoraElemento.textContent = fechaHoraTexto;
}

// Actualiza la fecha y hora cada segundo
setInterval(mostrarFechaHora, 1000);

// Llama a la función inicialmente para mostrar la fecha y hora al cargar la página
mostrarFechaHora();

// Obtener elementos del DOM
const formularioNoticia = document.getElementById('formulario-noticia');
const seccionNoticias = document.getElementById('seccion-noticias');

// Manejar el envío del formulario
formularioNoticia.addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar que la página se recargue al enviar el formulario

    const titulo = document.getElementById('titulo').value;
    const descripcion = document.getElementById('descripcion').value;

    // Crear un nuevo artículo
    const nuevoArticulo = document.createElement('div');
    nuevoArticulo.innerHTML = `
        <h2>${titulo}</h2>
        <p>${descripcion}</p>
    `;

    // Agregar el nuevo artículo a la sección de noticias
    seccionNoticias.appendChild(nuevoArticulo);

    // Mostrar la sección de noticias
    seccionNoticias.classList.remove('oculto');

    // Limpiar los campos del formulario
    document.getElementById('titulo').value = '';
    document.getElementById('descripcion').value = '';
});