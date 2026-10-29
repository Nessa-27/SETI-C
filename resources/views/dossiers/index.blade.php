<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SETI-C BTP - Dossiers</title>
</head>
<body class="bg-light">
<div class="container my-4">
    <h2>📁 SETI-C BTP - Liste des dossiers</h2>
    <a href="{{ route('dossiers.create') }}" class="btn btn-primary mb-3">+ Nouveau dossier</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Propriétaire</th>
                <th>Commune / Quartier</th>
                <th>Parcelle</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dossiers as $d)
            <tr>
                <td>{{ $d->numero_dossier }}</td>
                <td>{{ $d->proprietaire->nom }} {{ $d->proprietaire->prenoms }}</td>
                <td>{{ $d->parcelle->commune }} - {{ $d->parcelle->quartier_village }}</td>
                <td>{{ $d->parcelle->numero_parcelle }} ({{ $d->parcelle->surface_m2 }} m²)</td>
                <td>{{ $d->date_demande }}</td>
                <td>
                    <a href="{{ route('dossiers.show', $d) }}" class="btn btn-sm btn-success">Voir</a>
                    <a href="{{ route('dossiers.edit', $d) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form method="POST" action="{{ route('dossiers.destroy', $d) }}" style="display:inline" onsubmit="return confirm('Supprimer définitivement ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">X</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>