<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>FenFexBooks - Diario de Lectura</title>

  <!-- Fuente caligráfica -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" id="tema" href="{{ asset('css/pendientes.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

</head>
<body>

  <!-- Botón hamburguesa de libros para móvil (flotante y redondo) -->
  <div 
    class="menu-toggle d-md-none  text-dark position-fixed rounded-circle shadow"
    id="toggleMenu"
    style="bottom: 24px; right: 24px; width: 56px; height: 56px; background: #ffc107; display: flex; align-items: center; justify-content: center; z-index: 1050; cursor: pointer;"
  >
    <span id="menuIcon" style="font-size: 2rem;">📘</span>
  </div>

  <!-- Menú móvil -->
   <div class="menu-movil d-md-none d-none" id="menuMovil">
     @forelse($opciones as $opcion)
          <a href="{{ $opcion['ruta']}}" class="libro">
            <span class="material-symbols-outlined">{{ $opcion['icono'] }}</span>
            <span class="texto-opcion">{{$opcion['nombre']}}</span>
          </a>
        @empty
          <p>No hay opciones disponibles.</p>
        @endforelse
  </div>

  <div class="container-fluid">
    <div class="row">
            @include('auth.partials.nav')

      <!-- Menú lateral escritorio -->
      @include('auth.partials.sidebar')
      <!-- Contenido principal -->
<main class="col-md-9 col-lg-10 p-4 contenido">
        <section class="porleer mt-4 text-center">
  <h2> 🏠🖊️ Pagina principal👓📚</h2>
   
</section>
        <section class="progreso">
          <h2>📘 Lectura actual</h2>
          <p><strong>Libro:</strong> <span id="titulo"></span></p>
          <p><strong>Página:</strong> <span id="paginasLeidas"></span></p>
          <a class="btn btn-warning text-dark" href="{{ route('diario')}}">Seguir leyendo</a>
        </section>

        <section class="ultimos">
          <h2>🔍 Buscar libro: </h2>
          <!-- Buscador y botón alineados en una fila centrada -->
          <div class="d-flex justify-content-center align-items-center" style="max-width: 500px; margin: 0 auto;">
            <input class="form-control me-2" type="text" id="busqueda" placeholder="Buscar libros..." aria-label="Buscar"
              style="background-color: #fffbe6; color: #8b5a2b; border-color: #d4af37; max-width: 400px;">
            <button class="btn btn-outline-warning" onclick="buscarLibroGoogle(document.getElementById('busqueda').value)" style="color: #8b5a2b; background-color: #ffc720;">Buscar</button>
          </div>
        </section>
        <section id="seccion-resultados" style="display: none;">
  <h2>📚🔎 Resultados de búsqueda:</h2>
  <div class="position-relative">
    <!-- Flecha izquierda -->
    <button class="flecha-slider flecha-izq" onclick="desplazarSlider(-1)"><span style="position: absolute;
    bottom: 20%;
    left: 8%;
    font-size:25px;">👈</span></button>

    <!-- Slider -->
    <div class="libros-slider-container">
      <div class="libros-slider" id="librosSlider"></div>
    </div>

    <!-- Flecha derecha -->
    <button class="flecha-slider flecha-der" onclick="desplazarSlider(1)"><span style="position: absolute;
    bottom: 20%;
    left: 13%;
    font-size:25px;">👉</span></button>
  </div>
</section>


<style>
  .flecha-slider {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: #ffc720;
  color: #8b5a2b;
  border: none;
  border-radius: 50%;
  font-size: 1.5rem;
  width: 40px;
  height: 40px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  z-index: 5;
}

.flecha-izq {
  left: -20px;
}

.flecha-der {
  right: -20px;
}

.libros-slider-container {
  overflow-x: auto;
  scroll-behavior: smooth;
  padding: 1rem 0;
}

.libros-slider {
  display: flex;
  gap: 20px;
  padding: 10px;
}

.libros-slider .card {
  width: 180px;
  transition: transform 0.3s, opacity 0.3s, box-shadow 0.3s;
  flex-shrink: 0;
  opacity: 0.4;
  transform: scale(0.95);
}

.libros-slider .card.centrado {
  opacity: 1;
  transform: scale(1.1);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.flecha-slider {
  font-size: 1.5rem;
  background-color: #ffc720;
  color: #8b5a2b;
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
}
.libros-slider-container::-webkit-scrollbar {
  height: 10px;
}

.libros-slider-container::-webkit-scrollbar-track {
  background: #f5e6c8;
  border-radius: 5px;
}

.libros-slider-container::-webkit-scrollbar-thumb {
  background: #d4af37;
  border-radius: 5px;
}

.libros-slider-container::-webkit-scrollbar-thumb:hover {
  background: #8b5a2b;
}
.libros-slider-container {
  overflow-x: auto;
  overflow-y: hidden; /* 👈 esto evita scroll vertical */
  scroll-behavior: smooth;
  padding: 1rem 0;
  white-space: nowrap;
}

</style>
        <!-- Relleno para que el footer fijo no tape el contenido -->
<div style="height: 80px;"></div>

      </main>
    </div>
  </div>

    <footer class="text-center py-4" style="background-color: #8b5a2b; color: #d4af37;">
  <small>© 2025 FenFexBooks · Todos los derechos reservados</small>
</footer>
  <!-- Bootstrap Bundle con Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script de toggle menú -->
  <script>
    const toggleBtn = document.getElementById('toggleMenu');
    const menu = document.getElementById('menuMovil');
    const icon = document.getElementById('menuIcon');

    toggleBtn.addEventListener('click', () => {
      const abierto = menu.classList.toggle('d-none');
      icon.textContent = abierto ? '📘' : '📖';
    });
  </script>
   <script>
          // Mostrar la sección de resultados solo si hay búsqueda
          function buscarLibroGoogle(titulo) {
            if (titulo.trim() === '') {
              alert('Por favor, ingresa un término de búsqueda.');
              return;
            }
            document.getElementById('seccion-resultados').style.display = 'block';
            fetch(`https://www.googleapis.com/books/v1/volumes?q=${encodeURIComponent(titulo)}`)
              .then(response => response.json())
              .then(data => mostrarLibrosGoogle(data.items))
              .catch(error => console.error("Error al buscar libros:", error));
          }
        </script>

<script>
function mostrarLibrosGoogle(libros) {
  const contenedor = document.getElementById('librosSlider');
  contenedor.innerHTML = '';

  if (!libros || libros.length === 0) {
    contenedor.innerHTML = '<p>No se encontraron libros.</p>';
    return;
  }

  libros.slice(0, 10).forEach(libro => {
    const info = libro.volumeInfo;
    const anio_publicacion = info.publishedDate ? info.publishedDate.substring(0, 4) : '¿?';
    const titulo = info.title || 'Sin título';
    const autor = info.authors ? info.authors.join(', ') : 'Autor desconocido';
    const portada = info.imageLinks?.thumbnail || 'https://via.placeholder.com/100x150?text=Sin+imagen';
    const paginas = info.pageCount || '¿?';
    const isbn = info.industryIdentifiers?.find(id => id.type === 'ISBN_13')?.identifier
      || info.industryIdentifiers?.find(id => id.type === 'ISBN_10')?.identifier
      || 'Sin ISBN';
    const card = document.createElement('div');
    card.className = 'card';
    card.innerHTML = `
      <img src="${portada}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="${titulo}">
      <div class="card-body text-center">
        <h6 class="card-title">${titulo}</h6>
        <p class="card-text">${autor}</p>
        <p class="card-text"><strong>Páginas:</strong> ${paginas}</p>
        <p class="card-text"><strong>Año:</strong> ${anio_publicacion}</p>
        <button class="btn btn-primary" onclick="agregarLibro('${titulo}', '${autor}', '${portada}', '${paginas}', '${isbn}', '${anio_publicacion}')">Agregar a mi lista</button>
      </div>
    `;
    contenedor.appendChild(card);
    indiceLibroActual = 0;

  });

  marcarCentrado(); // marcar el primero
}
function mostrarModalMensaje(mensaje, exito = true) {
  let modal = document.getElementById('modalMensaje');
  if (!modal) {
    modal = document.createElement('div');
    modal.id = 'modalMensaje';
    modal.innerHTML = `
      <div class="modal fade" tabindex="-1" id="modalMensajeReal" aria-labelledby="modalMensajeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="border-radius: 1rem;">
            <div class="modal-header" style="background-color: ${exito ? '#28a745' : '#dc3545'};">
              <h5 class="modal-title" id="modalMensajeLabel">${exito ? '¡Éxito!' : 'Error'}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
              <p>${mensaje}</p>
            </div>
          </div>
        </div>
      </div>
    `;
    document.body.appendChild(modal);
  } else {
    modal.querySelector('.modal-title').textContent = exito ? '¡Éxito!' : 'Error';
    modal.querySelector('.modal-header').style.backgroundColor = exito ? '#28a745' : '#dc3545';
    modal.querySelector('.modal-body p').textContent = mensaje;
  }
  const modalBootstrap = new bootstrap.Modal(document.getElementById('modalMensajeReal'));
  modalBootstrap.show();
}
function agregarLibro(titulo, autor, portada, paginas, isbn, anio_publicacion) {
  // Crear el modal si no existe
  let modal = document.getElementById('modalAgregarLibro');
  if (!modal) {
    modal = document.createElement('div');
    modal.id = 'modalAgregarLibro';
    modal.innerHTML = `
      <div class="modal fade" tabindex="-1" id="modalAgregarLibroReal" aria-labelledby="modalAgregarLibroLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="border-radius: 1rem;">
            <div class="modal-header" style="background-color: #ffc720;">
              <h5 class="modal-title" id="modalAgregarLibroLabel">¿Dónde quieres añadir este libro?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
              <button class="btn btn-outline-warning m-2" onclick="seleccionarLista('pendientes')">Añadir a Pendientes</button>
              <button class="btn btn-outline-primary m-2" onclick="seleccionarLista('leyendo')">Añadir a Leyendo</button>
              <button class="btn btn-outline-success m-2" onclick="seleccionarLista('leidos')">Añadir a Terminado</button>
              <button class="btn btn-outline-danger  m-2" onclick="seleccionarLista('favoritos')">Añadir a Favoritos</button>
            </div>
          </div>
        </div>
      </div>
    `;
    document.body.appendChild(modal);
  }

  // Guardar datos del libro en variables globales temporales
  window.libroSeleccionado = { titulo, autor, portada, paginas, isbn, anio_publicacion };

  // Mostrar el modal usando Bootstrap 5
  const modalBootstrap = new bootstrap.Modal(document.getElementById('modalAgregarLibroReal'));
  modalBootstrap.show();

  // Función para manejar la selección
  window.seleccionarLista = function(lista) {
  const libro = window.libroSeleccionado;
  if (!libro) {
    alert('No se ha seleccionado ningún libro.');
    return;
  }

  fetch('/libros/guardar', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify({
      titulo: libro.titulo,
      autor: libro.autor,
      anio_publicacion: libro.anio_publicacion,
      paginas: libro.paginas,
      isbn: libro.isbn,
      portada: libro.portada,
      lista: lista 
    })
  })
  .then(response => {
    if (!response.ok) throw new Error("Libro ya existe en un grupo");
    return response.json();
  })
  .then(data => {
    mostrarModalMensaje(`📚 Libro guardado con éxito en ${lista.toUpperCase()}`, true);
  })
  .catch(error => {
    mostrarModalMensaje("⚠️ Libro ya existente en un grupo", false);
  });

  modalBootstrap.hide();
};

}
// Función para marcar el elemento centrado
function marcarCentrado() {
  const slider = document.getElementById('librosSlider');
  const cards = slider.querySelectorAll('.card');
  const centroSlider = slider.scrollLeft + slider.offsetWidth / 2;

  cards.forEach(card => {
    const rect = card.getBoundingClientRect();
    const cardCentro = rect.left + rect.width / 2;
    const distancia = Math.abs(centroSlider - (slider.scrollLeft + card.offsetLeft + card.offsetWidth / 2));
    card.classList.toggle('centrado', distancia < card.offsetWidth / 2);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const slider = document.getElementById('librosSlider');
  slider?.addEventListener('scroll', () => {
    clearTimeout(slider._scrollTimeout);
    slider._scrollTimeout = setTimeout(marcarCentrado, 100); // espera para no llamar demasiado rápido
  });
});


</script>
<script>
function desplazarSlider(direccion) {
  const contenedorScroll = document.querySelector('.libros-slider-container');
  const tarjetas = document.querySelectorAll('.libros-slider .card');
  if (tarjetas.length === 0) return;

  // Limita el índice al rango válido
  indiceLibroActual += direccion;
  if (indiceLibroActual < 0) indiceLibroActual = 0;
  if (indiceLibroActual >= tarjetas.length) indiceLibroActual = tarjetas.length - 1;

  const tarjetaSeleccionada = tarjetas[indiceLibroActual];
  const scrollTarget = tarjetaSeleccionada.offsetLeft - (contenedorScroll.offsetWidth / 2 - tarjetaSeleccionada.offsetWidth / 2);

  contenedorScroll.scrollTo({ left: scrollTarget, behavior: 'smooth' });

  tarjetas.forEach(t => t.classList.remove('centrado'));
  tarjetaSeleccionada.classList.add('centrado');
}
let indiceLibroActual = 0;

</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const libroActual = document.getElementById('titulo');
  const paginaLibroActual = document.getElementById('paginasLeidas');

  const guardado = JSON.parse(localStorage.getItem('libroSeleccionado'));

  if (guardado && libroActual && paginaLibroActual) {
    libroActual.textContent = guardado.titulo;
    paginaLibroActual.textContent = `${guardado.paginasLeidas} de ${guardado.totalPaginas}`;
    libroActual.style.display = 'inline';
    paginaLibroActual.style.display = 'inline';
  } else {
    libroActual.textContent = 'Ningún libro seleccionado';
    paginaLibroActual.textContent = '';
  }
});
</script>

</body>
</html>
