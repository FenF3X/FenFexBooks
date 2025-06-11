<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>FenFexBooks - Diario de Lectura</title>

  <!-- Fuente caligráfica -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" id="tema" href="{{ asset('css/pendientes.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

  <style>
   
  </style>
</head>
<body>

  <!-- Botón hamburguesa de libros para móvil (flotante y redondo) -->
  <div 
    class="menu-toggle d-md-none  text-dark position-fixed rounded-circle shadow"
    id="toggleMenu"
    style="bottom: 24px; right: 24px; width: 56px; height: 56px; background: #fff; display: flex; align-items: center; justify-content: center; z-index: 1050; cursor: pointer;"
  >
    <span id="menuIcon" style="font-size: 2rem;">📘</span>
  </div>

  <!-- Menú móvil -->
  <div class="menu-movil d-md-none d-none" id="menuMovil">
    <a href="#" class="libro">Inicio</a>
    <a href="#" class="libro">Mis Lecturas</a>
    <a href="#" class="libro">Añadir Libro</a>
    <a href="#" class="libro">Favoritos</a>
    <a href="#" class="libro">Calendario</a>
    <a href="#" class="libro">Buscar</a>
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
          <p><strong>Libro:</strong> "El Nombre del Viento"</p>
          <p><strong>Página:</strong> 87 de 243</p>
          <button class="btn btn-warning text-dark">Seguir leyendo</button>
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
            <div id="carouselLibros" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" id="carousel-inner-libros">
    <!-- Aquí van las tarjetas de libros -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselLibros" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #8b5a2b;"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselLibros" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #8b5a2b;"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

        </section>
       
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
  const contenedor = document.getElementById('carousel-inner-libros');
  contenedor.innerHTML = '';

  if (!libros || libros.length === 0) {
    contenedor.innerHTML = '<div class="carousel-item active"><p>No se encontraron libros.</p></div>';
    return;
  }

  libros.slice(0, 10).forEach((libro, index) => {
    const info = libro.volumeInfo;
    const titulo = info.title || 'Sin título';
    const autor = info.authors ? info.authors.join(', ') : 'Autor desconocido';
    const portada = info.imageLinks?.thumbnail || 'https://via.placeholder.com/100x150?text=Sin+imagen';

    const activeClass = index === 0 ? 'active' : '';

    const item = document.createElement('div');
    item.className = `carousel-item ${activeClass}`;
    item.innerHTML = `
      <div class="d-flex justify-content-center">
        <div class="card" style="width: 200px;">
          <img src="${portada}" class="card-img-top" alt="${titulo}" style="height: 300px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="card-title">${titulo}</h6>
            <p class="card-text" style="font-size: 0.9rem;">${autor}</p>
          </div>
        </div>
      </div>
    `;
    contenedor.appendChild(item);
  });
}

</script>
<script>
  function desplazarSlider(direccion) {
    const slider = document.getElementById('sliderLibros');
    const desplazamiento = 200 * direccion; // cantidad en píxeles
    slider.scrollBy({ left: desplazamiento, behavior: 'smooth' });
  }
</script>

</body>
</html>
