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
  <h2>📓🖊️Diario de libros</h2>
   
</section>
<section class="progreso d-flex justify-content-between align-items-center">
  <div>
    <h2>📘 Lectura actual</h2>
    <p><strong>Libro:</strong> <span id="libroActual" style="display:none;">{{ $leyendo->first() ? $leyendo->first()->titulo : 'Ningún libro seleccionado' }}</span></p>
 
    <p><strong>Página:</strong> <span id="paginaLibroActual" style="display:none;">{{ $ultimaPagina ?? '' }} de {{ $leyendo->first() ? $leyendo->first()->paginas : 'Ningún libro seleccionado' }}</span></p>
   

  </div>
  <div style="min-width: 250px;">
    <form>
    <select class="form-select" id="selectorLibro" style="background-color: #ffc107;">
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
       <section class="mt-4">
          <h2>🧾✍️ Crear nota de lectura nueva</h2>

  <form id="formDiario" onsubmit=" return verificarLibro()" action="{{ route('guardar.entrada') }}" method="POST">
    @csrf
    <div class="row mb-3">
      <div class="col-md-3">
        <label for="pagina_inicio" class="form-label">Página de inicio</label>
        <input type="number" class="form-control" id="pagina_inicio" name="pagina_inicio" readonly value="" min="0" required>
      </div>
      <div class="col-md-3">
        <label for="pagina_fin" class="form-label">Página de fin</label>
        <input type="number" class="form-control" id="pagina_fin" name="pagina_fin" min="0" required>
      </div>
      <div class="col-md-6">
        <label for="fecha_hora" class="form-label">Fecha y hora del registro</label>
        <input type="text" class="form-control" id="fecha_hora" disabled>
      </div>
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción (máx. 500 caracteres)</label>
      <div class="position-relative">
        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" maxlength="500" required></textarea>
        <small class="text-end position-absolute bottom-0 end-0 p-2" id="contadorCaracteres">0/500</small>
        <div class="mt-3">
          <button type="submit"  class="btn btn-success" style="background-color:#d4af37;color:#212529;border: 0px;">Guardar entrada</button>
          <input type="hidden" name="libro_id" id="libro_id">
          <input type="hidden" name="libro_terminado" id="libro_terminado" value="0">
        </div>
      </div>
    </div>
  </form>
</section>
<section style="display: none;" id="notas">
  <h2>📚 Mis notas de lectura</h2>
  @if ($entradas->isEmpty())
    <p class="text-muted">No tienes notas de lectura registradas.</p>
  @else
    @foreach ($leyendo as $libro)
      <div class="notas-libro" id="notas-libro-{{ $libro->id }}" style="display:none;">
        <h4 class="mt-3">{{ $libro->titulo }}</h4>
        @foreach ($entradas->where('libro_id', $libro->id) as $entrada)
          <div class="list-group-item d-flex justify-content-between align-items-start" style="background-color: #f8f9fa; margin-bottom: 10px; border-radius: 5px; color: #212529;">
            <div>
              <h5 class="mb-1">{{ $entrada->descripcion }}</h5>
              <p class="mb-1">Página {{ $entrada->pagina_inicio }} a {{ $entrada->pagina_fin }}</p>
              <small class="text-muted">{{ $entrada->fecha_hora }}</small>
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  @endif
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
document.addEventListener('DOMContentLoaded', function () {
  const select = document.getElementById('selectorLibro');
  const libroActual = document.getElementById('libroActual');
  const paginaLibroActual = document.getElementById('paginaLibroActual');

  select.addEventListener('change', function () {
   
    libroActual.style.display = 'inline';
    paginaLibroActual.style.display = 'inline';
    document.getElementById('notas').style.display = 'block'; // Mostrar la sección de notas

     // Ocultar las notas de todos los libros
    const libroId = this.value;
     // Mostrar los elementos ocultos al seleccionar un libro
    document.querySelectorAll('.notas-libro').forEach(div => div.style.display = 'none');

// Mostrar la del libro seleccionado
const notasDelLibro = document.getElementById('notas-libro-' + libroId);
if (notasDelLibro) notasDelLibro.style.display = 'block';
    const titulo = this.options[this.selectedIndex].dataset.titulo;
    const totalPaginas = this.options[this.selectedIndex].dataset.paginas;
  document.getElementById('libro_id').value = libroId;

    fetch(`/pagina-fin/${libroId}`)
      .then(res => res.json())
      .then(data => {
        const ultima = data.pagina_fin ?? 0;
        libroActual.textContent = titulo;
        paginaLibroActual.textContent = `${ultima} de ${totalPaginas}`;
        document.getElementById('pagina_inicio').value = ultima; // Actualiza la página de inicio
      })
      .catch(err => {
        console.error("Error:", err);
        libroActual.textContent = titulo;
        paginaLibroActual.textContent = `¿? de ${totalPaginas}`;
      });
  });
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const fechaHora = document.getElementById('fecha_hora');
    const textarea = document.getElementById('descripcion');
    const contador = document.getElementById('contadorCaracteres');

    function actualizarFechaHora() {
      const ahora = new Date();
      const fechaFormateada = ahora.toLocaleDateString('es-ES');
      const horaFormateada = ahora.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' });
      fechaHora.value = `${fechaFormateada} ${horaFormateada}`;
    }

    // Inicial y luego cada minuto (60000 ms)
    actualizarFechaHora();
    setInterval(actualizarFechaHora, 60000);

    // Contador de caracteres
    textarea.addEventListener('input', () => {
      contador.textContent = `${textarea.value.length}/500`;
    });
  });
</script>
<script>
  function verificarLibro() {
    const select = document.getElementById('selectorLibro');
    const libroId = select.value;

    if (!libroId) {
      alert('Por favor, selecciona un libro antes de guardar la entrada.');
      return false; // Evita el envío del formulario
    }
    const paginaInicio = document.getElementById('pagina_inicio').value;
    const paginaFin = document.getElementById('pagina_fin').value;
    const selectedOption = select.options[select.selectedIndex];
    const totalPaginas = selectedOption ? parseInt(selectedOption.getAttribute('data-paginas')) : 0;
    console.log(`Total de páginas del libro: ${totalPaginas}`);
    if (paginaInicio && paginaFin) {
      if (parseInt(paginaInicio) > parseInt(paginaFin)) {
        alert('La página de inicio no puede ser mayor que la de fin.');
        return false;
      }else
      if (parseInt(paginaFin) > totalPaginas) {
        alert('La página de fin no puede ser mayor que el total de páginas del libro.');
        return false;
      }else if(parseInt(paginaFin) == totalPaginas){
        const confirmacion = confirm('Estás marcando el libro como finalizado. ¿Deseas continuar?');
        if (!confirmacion) {
          return false; // Evita el envío del formulario si el usuario cancela
        }else{
              document.getElementById('libro_terminado').value = "1";
        }
      }
    }
        return true; 

  }
</script>

</body>
</html>
