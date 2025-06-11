<section class="porleer mt-4">
  <h2>📖 Libros pendientes</h2>
  <ul class="list-group">
    @forelse ($opciones as $opcion)
      @if ($opcion->tipo === 'porleer')
        <li class="list-group-item">{{ $opcion->nombre }}</li>
      @endif
    @empty
      <li class="list-group-item">No hay libros pendientes.</li>
    @endforelse
  </ul>
</section>
