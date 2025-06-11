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
  <h2>⭐📚 Libros favoritos</h2>
   
</section>
<section class="progreso">
          <h2>📘 Lectura actual</h2>
          <p><strong>Libro:</strong> "El Nombre del Viento"</p>
          <p><strong>Página:</strong> 87 de 243</p>
          <button class="btn btn-warning text-dark">Seguir leyendo</button>
        </section>

        <section class="ultimos">
          <h2>📚 Últimos libros leídos</h2>
          <div class="d-flex gap-3">
            <div class="libro-portada">📕</div>
            <div class="libro-portada">📗</div>
            <div class="libro-portada">📘</div>
          </div>
        </section>

        <section class="frase">
          <blockquote>“Leer es soñar con los ojos abiertos.”</blockquote>
          <p>Has leído <strong>12 libros</strong> este año.</p>
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
</body>
</html>
