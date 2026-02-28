@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="row mb-4">
    <!-- Card Élèves -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body">
                <i class="bi bi-people display-4 text-primary"></i>
                <h5 class="mt-3">Élèves</h5>
                <h3 class="fw-bold">{{ $elevesCount }}</h3>
                <a href="{{ route('eleves.index') }}" class="btn btn-primary btn-sm mt-2">Voir</a>
            </div>
        </div>
    </div>

    <!-- Card Formations -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body">
                <i class="bi bi-journal-bookmark display-4 text-success"></i>
                <h5 class="mt-3">Formations</h5>
                <h3 class="fw-bold">{{ $formationsCount }}</h3>
                <a href="{{ route('formations.index') }}" class="btn btn-success btn-sm mt-2">Voir</a>
            </div>
        </div>
    </div>

    <!-- Card Inscriptions -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body">
                <i class="bi bi-pencil-square display-4 text-warning"></i>
                <h5 class="mt-3">Inscriptions</h5>
                <h3 class="fw-bold">{{ $inscriptionsCount }}</h3>
                <a href="{{ route('inscriptions.index') }}" class="btn btn-warning btn-sm mt-2">Voir</a>
            </div>
        </div>
    </div>
</div>

<!-- Graphique global -->
<div class="card shadow-sm border-0 mt-4">
    <div class="card-header">
        <h5 class="mb-0"><i class="bi bi-bar-chart-line"></i> Statistiques globales</h5>
    </div>
    <div class="card-body">
        <canvas id="statsChart"></canvas>
    </div>
</div>

<!-- Graphique Inscriptions par mois -->
<div class="card shadow-sm border-0 mt-4">
    <div class="card-header">
        <h5 class="mb-0"><i class="bi bi-graph-up"></i> Développement des inscriptions par mois</h5>
    </div>
    <div class="card-body">
        <canvas id="inscriptionsChart"></canvas>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Graphique global
    const ctx = document.getElementById('statsChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Élèves', 'Formations', 'Inscriptions'],
            datasets: [{
                label: 'Statistiques',
                data: [{{ $elevesCount }}, {{ $formationsCount }}, {{ $inscriptionsCount }}],
                backgroundColor: ['#006d77', '#2a9d8f', '#f4a261']
            }]
        },
        options: { responsive: true, plugins: { legend: { display: false } } }
    });

    // Graphique Inscriptions par mois
    const ctx2 = document.getElementById('inscriptionsChart');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: [
                @foreach($inscriptionsParMois as $mois => $total)
                    '{{ $mois }}',
                @endforeach
            ],
            datasets: [{
                label: 'Inscriptions',
                data: [
                    @foreach($inscriptionsParMois as $mois => $total)
                        {{ $total }},
                    @endforeach
                ],
                borderColor: '#2a9d8f',
                backgroundColor: 'rgba(42, 157, 143, 0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } },
            scales: { y: { beginAtZero: true } }
        }
    });
</script>
@endpush
