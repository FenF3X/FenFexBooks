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
  #carruselLeidos::-webkit-scrollbar {
    display: none;
  }

  #carruselLeidos {
    -ms-overflow-style: none;  /* IE y Edge */
    scrollbar-width: none;     /* Firefox */
  }
</style>

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
  <h2>⭐📚 Libros favoritos</h2>
   
</section>
 <section class="progreso">
          <h2>📘 Lectura actual</h2>
          <p><strong>Libro:</strong> <span id="titulo"></span></p>
          <p><strong>Página:</strong> <span id="paginasLeidas"></span></p>
          <a class="btn btn-warning text-dark" href="{{ route('diario')}}">Seguir leyendo</a>
        </section>

        <section class="ultimos position-relative">
  <h2>📚 Mis libros favoritos ⭐</h2>
    @if($favoritos->isEmpty())
      <p class="text-white" id="sinfavoritos">No tienes libros favoritos aún.</p>
      @else
  <!-- Flecha izquierda -->
  <button id="flechaIzq" class="btn btn-light position-absolute top-50 start-0 translate-middle-y d-none d-md-inline" style="z-index: 10;">
    ◀
  </button>

  <!-- Contenedor deslizante -->
  <div id="carruselLeidos" class="d-flex gap-3 flex-nowrap overflow-auto px-5 py-2" style="scroll-behavior: smooth;">
    @foreach($favoritos as $libro)
      <div class="card shadow-sm" style="width: 120px; min-width: 120px; background-color: #f8f9fa;">
        <img src="{{ $libro->portada }}" class="card-img-top" alt="Portada de {{ $libro->titulo }}" style="height: 180px; object-fit: cover;">
        <div class="card-body p-2">
          <p class="card-text text-center small" style="font-weight: bold;">{{ Str::limit($libro->titulo, 40) }}</p>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Flecha derecha -->
  <button id="flechaDer" class="btn btn-light position-absolute top-50 end-0 translate-middle-y d-none d-md-inline" style="z-index: 10;">
    ▶
  </button>
  @endif
</section>


        <section class="frase">
          <blockquote>“Leer es soñar con los ojos abiertos.”</blockquote>
          <p>Has leído <strong><span>{{ $cantidad }}</span> @if($cantidad == 1) <span> libro</span> @else <span> libros</span>@endif</strong> este año.</p>
        </section>
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
<script>
  function actualizarFlechasLeidos() {
    const carrusel = document.getElementById("carruselLeidos");
    const flechaIzq = document.getElementById("flechaIzq");
    const flechaDer = document.getElementById("flechaDer");

    setTimeout(() => {
      const hayDesbordamiento = carrusel.scrollWidth > carrusel.clientWidth;
      flechaIzq.style.display = hayDesbordamiento ? 'inline-block' : 'none';
      flechaDer.style.display = hayDesbordamiento ? 'inline-block' : 'none';
    }, 100);
  }

  document.addEventListener("DOMContentLoaded", function () {
    const carrusel = document.getElementById("carruselLeidos");
    const flechaIzq = document.getElementById("flechaIzq");
    const flechaDer = document.getElementById("flechaDer");

    flechaIzq.addEventListener("click", () => {
      carrusel.scrollBy({ left: -150, behavior: "smooth" });
    });

    flechaDer.addEventListener("click", () => {
      carrusel.scrollBy({ left: 150, behavior: "smooth" });
    });

    actualizarFlechasLeidos();
    window.addEventListener('resize', actualizarFlechasLeidos);
  });
</script>

</body>
</html>
