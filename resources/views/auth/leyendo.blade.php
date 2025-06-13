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
  <h2>📖👓Libros actualmente en proceso</h2>
   
</section>
<section class="progreso d-flex justify-content-between align-items-center">
  <div>
    <h2>📘 Lectura actual</h2>
    <p><strong>Libro:</strong> <span id="libroActual" style="display:none;">{{ $leyendo->first() ? $leyendo->first()->titulo : 'Ningún libro seleccionado' }}</span></p>
 
    <p><strong>Página:</strong> <span id="paginaLibroActual" style="display:none;">{{ $ultimaPagina ?? '' }} de {{ $leyendo->first() ? $leyendo->first()->paginas : 'Ningún libro seleccionado' }}</span></p>
   

    <a class="btn btn-warning text-dark" href="{{ route('diario') }}">Seguir leyendo</a>
  </div>
  <div class="w-100" style="max-width: 350px; min-width: 200px;">
    <form>
      <select 
        class="form-select form-select-lg mb-3" 
        id="selectorLibro" 
        style="background-color: #ffc107; width: 100%;"
      >
        <option value="" disabled selected>Selecciona un libro</option>
        @foreach ($leyendo as $libro)
          <option value="{{ $libro->id }}" data-titulo="{{ $libro->titulo }}" data-paginas="{{ $libro->paginas }}">
            {{ $libro->titulo }}
          </option>
        @endforeach
      </select>
    </form>
  </div>
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
  const select = document.getElementById('selectorLibro');
  const libroActual = document.getElementById('libroActual');
  const paginaLibroActual = document.getElementById('paginaLibroActual');

  // Si ya hay libro guardado, cargarlo
  const guardado = JSON.parse(localStorage.getItem('libroSeleccionado'));
  if (guardado) {
    libroActual.style.display = 'inline';
    paginaLibroActual.style.display = 'inline';
    libroActual.textContent = guardado.titulo;
    paginaLibroActual.textContent = `${guardado.paginasLeidas} de ${guardado.totalPaginas}`;
    // Seleccionar opción en el select
    const opcion = [...select.options].find(opt => opt.value == guardado.id);
    if (opcion) select.value = guardado.id;
  }

  select.addEventListener('change', function () {
    const libroId = this.value;
    const titulo = this.options[this.selectedIndex].dataset.titulo;
    const totalPaginas = this.options[this.selectedIndex].dataset.paginas;

    fetch(`/pagina-fin/${libroId}`)
      .then(res => res.json())
      .then(data => {
        const ultima = data.pagina_fin ?? 0;

        libroActual.style.display = 'inline';
        paginaLibroActual.style.display = 'inline';
        libroActual.textContent = titulo;
        paginaLibroActual.textContent = `${ultima} de ${totalPaginas}`;

        // Guardar en localStorage
        const libro = {
          id: libroId,
          titulo: titulo,
          paginasLeidas: ultima,
          totalPaginas: totalPaginas
        };
        localStorage.setItem('libroSeleccionado', JSON.stringify(libro));
      })
      .catch(err => {
        console.error("Error:", err);
        libroActual.textContent = titulo;
        paginaLibroActual.textContent = `¿? de ${totalPaginas}`;
      });
  });
});
</script>


</body>
</html>
