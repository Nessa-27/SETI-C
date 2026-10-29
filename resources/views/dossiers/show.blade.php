<!DOCTYPE html>
<html><head><meta charset="UTF-8"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"><title>Dossier</title></head>
<body class="bg-light"><div class="container my-4">
<h2>Dossier {{ $dossier->numero_dossier }}</h2>
<div class="card p-3 mb-3"><b>Propriétaire:</b> {{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }} - NPI: {{ $dossier->proprietaire->npi }}<br><b>Parcelle:</b> {{ $dossier->parcelle->commune }}, {{ $dossier->parcelle->arrondissement }}, {{ $dossier->parcelle->numero_parcelle }} - {{ $dossier->parcelle->surface_m2 }} m²</div>
<h4>Imprimer les documents officiels :</h4>
<a href="{{ route('dossiers.pdf',[$dossier,'demande']) }}" target="_blank" class="btn btn-primary">📄 Demande d'enregistrement</a>
<a href="{{ route('dossiers.pdf',[$dossier,'avis']) }}" target="_blank" class="btn btn-warning">📄 Avis de bornage</a>
<a href="{{ route('dossiers.pdf',[$dossier,'convocation']) }}" target="_blank" class="btn btn-success">📄 Convocation</a>
<br><br><a href="{{ route('dossiers.index') }}" class="btn btn-secondary">Retour liste</a>
</div></body></html>