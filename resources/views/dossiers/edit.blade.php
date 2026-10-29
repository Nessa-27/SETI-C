<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Modifier</title>
</head>
<body class="bg-light">
<div class="container my-4">
    <h2>Modifier {{ $dossier->numero_dossier }}</h2>

    <form method="POST" action="{{ route('dossiers.update', $dossier) }}">
        @csrf
        @method('PUT')

        <div class="card p-3 mb-3">
            <h5>Propriétaire</h5>
            <div class="row">
                <div class="col"><input name="nom" value="{{ $dossier->proprietaire->nom }}" class="form-control"></div>
                <div class="col"><input name="prenoms" value="{{ $dossier->proprietaire->prenoms }}" class="form-control"></div>
            </div>
            <input name="telephone" value="{{ $dossier->proprietaire->telephone }}" class="form-control mt-2">
            <input name="domicile" value="{{ $dossier->proprietaire->domicile }}" class="form-control mt-2">
        </div>

        <div class="card p-3 mb-3">
            <h5>Parcelle</h5>
            <input name="commune" value="{{ $dossier->parcelle->commune }}" class="form-control">
            <input name="quartier_village" value="{{ $dossier->parcelle->quartier_village }}" class="form-control mt-2">
            <div class="row mt-2">
                <div class="col"><input name="numero_parcelle" value="{{ $dossier->parcelle->numero_parcelle }}" class="form-control"></div>
                <div class="col"><input name="surface_m2" value="{{ $dossier->parcelle->surface_m2 }}" class="form-control"></div>
            </div>
            <input name="limite_nord" value="{{ $dossier->parcelle->limite_nord }}" class="form-control mt-2">
            <input name="limite_sud" value="{{ $dossier->parcelle->limite_sud }}" class="form-control mt-2">
        </div>

        <div class="card p-3 mb-3">
            <h5>Bornage</h5>
            <input type="date" name="date_bornage" value="{{ $dossier->bornage->date_bornage }}" class="form-control">
            <input type="time" name="heure_bornage" value="{{ $dossier->bornage->heure_bornage }}" class="form-control mt-2">
            <input name="lieu_rdv" value="{{ $dossier->bornage->lieu_rdv }}" class="form-control mt-2">
        </div>

        <button class="btn btn-success">💾 Enregistrer</button>
        <a href="{{ route('dossiers.show', $dossier) }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
</body>
</html>