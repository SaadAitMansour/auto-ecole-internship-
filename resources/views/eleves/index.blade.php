@extends('layouts.app')

@section('title', 'Liste des élèves')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Liste des élèves</h5>
        <a href="{{ route('eleves.create') }}" class="btn btn-light btn-sm">
            <i class="bi bi-plus-circle"></i> Ajouter un élève
        </a>
    </div>
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Nom & Prénom</th>
                    <th>CIN</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eleves as $eleve)
                <tr>
                    <td>{{ $eleve->id }}</td>
                    <td>{{ $eleve->nom_prenom }}</td>
                    <td>{{ $eleve->cin }}</td>
                    <td>
                        <a href="{{ route('eleves.show', $eleve->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet élève ?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
