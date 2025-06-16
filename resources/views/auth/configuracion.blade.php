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
  <h2>🔧⚙️Configuración y datos</h2>
</section>

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <!-- Cambiar tema -->
      <div class="card mb-4">
        <div class="card-header text-white fw-bold" style="background-color:#8b5a2b;">🎨 Tema de la interfaz</div>
        <div class="card-body bg-dark">
          <button id="alternarTema" class="btn bg-dark text-white" style="border: 1px solid #fff;">Alternar modo claro/oscuro</button>
        </div>
      </div>

      <!-- Datos del usuario -->
      <div class="card mb-4">
        <div class="card-header text-white fw-bold" style="background-color:#8b5a2b;">👤 Información del usuario</div>
        <div class="card-body bg-dark">
          <form method="POST" action="{{ route('configuracion.actualizarUsuario') }}">
            @csrf
            <div class="mb-3">
              <label for="usuario" class="form-label text-white">Nombre de usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" value="{{ auth()->user()->usuario }}">
            </div>
            <div class="mb-3">
              <label for="text" class="form-label text-white">Contraseña:</label>
              <input type="text" class="form-control" id="contrasena" name="contrasena" value="" placeholder="Introduce tu nueva contraseña">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color:#d4af37;border:0px;">Guardar cambios</button>
          </form>
        </div>
      </div>

      <!-- LocalStorage -->
      <div class="card mb-4">
        <div class="card-header  text-white fw-bold" style="background-color:#8b5a2b;">📚 Libros en curso</div>
        <div class="card-body bg-dark ">
          <button class="btn btn-danger" onclick="localStorage.removeItem('libroSeleccionado'); alert('Libro eliminado del almacenamiento local');">Eliminar libro actual</button>
        </div>
      </div>

    </div>
  </div>
</div>

        <div style="height: 80px;"></div>

</main>
    </div>
  </div>
<footer class="text-center py-4" style="background-color: #8b5a2b; color: #d4af37;">
  <small>© 2025 FenFexBooks · Todos los derechos reservados</small>
</footer>
  <!-- Bootstrap Bundle con Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bcryptjs@2.4.3/dist/bcrypt.min.js"></script>

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
  document.getElementById('alternarTema').addEventListener('click', () => {
    const hojaEstilo = document.getElementById('tema');
    if (hojaEstilo.getAttribute('href').includes('pendientes.css')) {
      hojaEstilo.setAttribute('href', '{{ asset("css/completados.css") }}');
    } else {
      hojaEstilo.setAttribute('href', '{{ asset("css/pendientes.css") }}');
    }
  });
</script>


</body>
</html>
