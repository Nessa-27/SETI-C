<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $dossier->numero_dossier }}</title>
</head>
<body class="bg-light">
<div class="container my-4">
    <a href="{{ route('dossiers.index') }}" class="btn btn-secondary mb-3">← Retour liste</a>

    <h2>Dossier {{ $dossier->numero_dossier }}</h2>

    <a href="{{ route('dossiers.edit', $dossier) }}" class="btn btn-warning mb-2">✏️ Modifier</a>
    <form method="POST" action="{{ route('dossiers.destroy', $dossier) }}" style="display:inline" onsubmit="return confirm('Supprimer ?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger mb-2">🗑️ Supprimer</button>
    </form>
    <hr>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Propriétaire</h5>
                <p><b>{{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }}</b><br>
                NPI: {{ $dossier->proprietaire->npi }}<br>
                Tél: {{ $dossier->proprietaire->telephone }}<br>
                Domicile: {{ $dossier->proprietaire->domicile }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Parcelle</h5>
                <p>Commune: {{ $dossier->parcelle->commune }}<br>
                Quartier: {{ $dossier->parcelle->quartier_village }}<br>
                Parcelle: {{ $dossier->parcelle->numero_parcelle }}<br>
                Surface: {{ $dossier->parcelle->surface_m2 }} m²</p>
            </div>
        </div>
    </div>

    <div class="card p-3 mt-3">
        <h5>📄 Documents PDF</h5>
        <a href="{{ route('dossiers.pdf', [$dossier, 'demande']) }}" target="_blank" class="btn btn-outline-primary">Demande d'enregistrement</a>
        <a href="{{ route('dossiers.pdf', [$dossier, 'avis']) }}" target="_blank" class="btn btn-outline-primary">Avis de bornage</a>
        <a href="{{ route('dossiers.pdf', [$dossier, 'convocation']) }}" target="_blank" class="btn btn-outline-primary">Convocation Chef village</a>
    </div>
</div>
</body>
</html>