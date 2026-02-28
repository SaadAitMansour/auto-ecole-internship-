@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<div class="container">

    <!-- Menu rapide -->
    <div class="mb-4 text-center">
        <a href="{{ url('/eleves/create') }}" class="btn btn-primary me-2">➕ Ajouter un élève</a>
        <a href="{{ url('/formations/create') }}" class="btn btn-success me-2">📘 Créer une formation</a>
        <a href="{{ url('/inscriptions/create') }}" class="btn btn-warning">📝 Nouvelle inscription</a>
    </div>

    <!-- Cartes récapitulatives -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5 class="card-title">Élèves</h5>
                    <p class="display-4">{{ $elevesCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5 class="card-title">Formations</h5>
                    <p class="display-4">{{ $formationsCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5 class="card-title">Inscriptions</h5>
                    <p class="display-4">{{ $inscriptionsCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphique bar -->
    <div class="card mb-4 shadow">
        <div class="card-header">📊 Statistiques globales</div>
        <div class="card-body">
            <canvas id="statsChart"></canvas>
        </div>
    </div>

    <!-- Graphique line -->
    <div class="card shadow">
        <div class="card-header">📈 Évolution des inscriptions par mois</div>
        <div class="card-body">
            <canvas id="lineChart"></canvas>
        </div>
    </div>

</div>

<!-- Script Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Bar chart global
    const ctxBar = document.getElementById('statsChart');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Élèves', 'Formations', 'Inscriptions'],
            datasets: [{
                label: 'Statistiques',
                data: [{{ $elevesCount }}, {{ $formationsCount }}, {{ $inscriptionsCount }}],
                backgroundColor: ['#007bff', '#28a745', '#ffc107']
            }]
        },
        options: { responsive: true, plugins: { legend: { display: false } } }
    });

    // Line chart inscriptions par mois
    const ctxLine = document.getElementById('lineChart');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: [
                @foreach($inscriptionsByMonth as $row)
                    '{{ $row->month }}',
                @endforeach
            ],
            datasets: [{
                label: 'Inscriptions',
                data: [
                    @foreach($inscriptionsByMonth as $row)
                        {{ $row->total }},
                    @endforeach
                ],
                borderColor: '#007bff',
                backgroundColor: 'rgba(0,123,255,0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: { responsive: true }
    });
</script>
@endsection
