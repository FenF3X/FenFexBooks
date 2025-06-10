<section class="col-md-3 col-lg-2 estante d-none d-md-block">
        <h1 class="logo">📚 FenFexBooks</h1>
        @forelse($opciones as $opcion)
          <a href="{{ $opcion['ruta']}}" class="libro">
            <span class="material-symbols-outlined">{{ $opcion['icono'] }}</span>
            <span class="texto-opcion">{{$opcion['nombre']}}</span>
          </a>
        @empty
          <p>No hay opciones disponibles.</p>
        @endforelse
</section>