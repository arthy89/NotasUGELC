<div>
    @if ($mostrarCard && $grado && $curso)
        <div class="card shadow">
            <div class="card-header text-bg-success">
                Estadísticas de rendimiento
            </div>
            <div class="card-body">
                <h5 class="card-title">Grado: {{ $grado }}</h5>
                <h5 class="card-title">Curso: {{ $curso }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    @endif
</div>
