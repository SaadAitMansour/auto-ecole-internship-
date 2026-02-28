@extends('layouts.app')

@section('title', 'Liste des formations')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des formations</h1>
    <a href="{{ route('formations.create') }}" class="btn btn-success mb-3">➕ Ajouter une formation</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Programme</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($formations as $formation)
                <tr>
                    <td>{{ $formation->id }}</td>
                    <td>{{ $formation->programme }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>
                        <!-- Bouton Voir -->
                        <a href="{{ route('formations.show', $formation->id) }}" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </a>

                        <!-- Bouton Supprimer -->
                        <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cette formation ?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Aucune formation trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
