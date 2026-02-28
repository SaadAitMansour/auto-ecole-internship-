<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Auto-École')</title>
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Palette personnalisée -->
    <style>
        :root {
            --bs-primary: #006d77;
            --bs-secondary: #83c5be;
            --bs-success: #2a9d8f;
            --bs-danger: #e63946;
            --bs-warning: #f4a261;
            --bs-info: #457b9d;
            --bs-dark: #1d3557;
        }
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 220px; /* largeur fixe */
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: var(--bs-dark);
            color: white;
            padding-top: 1rem;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: var(--bs-primary);
        }
        .content {
            margin-left: 220px; /* même valeur que la sidebar */
            padding: 20px;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: var(--bs-primary);
            color: white;
        }
        footer {
            background-color: var(--bs-dark);
            color: white;
            margin-left: 220px; /* idem que sidebar */
            padding: 10px;
        }

        /* Responsive : sidebar en haut sur mobile */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .content {
                margin-left: 0;
            }
            footer {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4"><i class="bi bi-car-front-fill"></i> Auto-École</h4>
        <a href="{{ route('eleves.index') }}"><i class="bi bi-people"></i> Élèves</a>
        <a href="{{ route('formations.index') }}"><i class="bi bi-journal-bookmark"></i> Formations</a>
        <a href="{{ route('inscriptions.index') }}"><i class="bi bi-pencil-square"></i> Inscriptions</a>
        <a href="{{ url('/') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-4">
        <small>&copy; {{ date('Y') }} Auto-École - Tous droits réservés</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts poussés depuis les vues -->
    @stack('scripts')
</body>
</html>
