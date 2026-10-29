<!DOCTYPE html>
<html><head><meta charset="UTF-8"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"><title>Dossiers</title></head>
<body class="bg-light"><div class="container my-4">
<h2>📁 Liste des Dossiers</h2><a href="{{ route('dossiers.create') }}" class="btn btn-primary mb-3">+ Nouveau Dossier</a>
<table class="table table-bordered bg-white"><tr><th>N° Dossier</th><th>Propriétaire</th><th>Parcelle</th><th>Type</th><th>Action</th></tr>
@forelse($dossiers as $d)
<tr><td>{{ $d->numero_dossier }}</td><td>{{ $d->proprietaire->nom }} {{ $d->proprietaire->prenoms }}</td><td>{{ $d->parcelle->commune }} - {{ $d->parcelle->numero_parcelle }}</td><td>{{ $d->type_procedure }}</td><td><a href="{{ route('dossiers.show',$d) }}" class="btn btn-sm btn-success">Voir / Imprimer</a></td></tr>
@empty<tr><td colspan="5">Aucun dossier. Crée le premier !</td></tr>@endforelse
</table></div></body></html>