<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouveau Dossier Cadastre</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-4">
<h2 class="mb-4">📁 Nouveau Dossier - SETI-C BTP / Mairie Calavi</h2>

@if($errors->any())
<div class="alert alert-danger">
@foreach($errors->all() as $e) {{ $e }}<br> @endforeach
</div>
@endif

<form method="POST" action="{{ route('dossiers.store') }}">
@csrf

<h4 class="bg-primary text-white p-2">1. Propriétaire</h4>
<div class="row g-3 mb-4">
<div class="col-md-4"><label>NPI *</label><input name="npi" class="form-control" required></div>
<div class="col-md-4"><label>Nom *</label><input name="nom" class="form-control" required></div>
<div class="col-md-4"><label>Prénoms *</label><input name="prenoms" class="form-control" required></div>
<div class="col-md-4"><label>Profession</label><input name="profession" class="form-control"></div>
<div class="col-md-4"><label>Domicile *</label><input name="domicile" class="form-control" required></div>
<div class="col-md-4"><label>Téléphone *</label><input name="telephone" class="form-control" required></div>
<div class="col-md-4"><label>Email</label><input name="email" class="form-control"></div>
</div>

<h4 class="bg-success text-white p-2">2. Parcelle</h4>
<div class="row g-3 mb-4">
<div class="col-md-4"><label>Commune *</label><input name="commune" value="Abomey-Calavi" class="form-control" required></div>
<div class="col-md-4"><label>Arrondissement *</label><input name="arrondissement" class="form-control" required></div>
<div class="col-md-4"><label>Quartier/Village *</label><input name="quartier_village" class="form-control" required></div>
<div class="col-md-3"><label>Lotissement</label><input name="nom_lotissement" class="form-control"></div>
<div class="col-md-3"><label>Ilot</label><input name="ilot" class="form-control"></div>
<div class="col-md-3"><label>N° Parcelle *</label><input name="numero_parcelle" class="form-control" required></div>
<div class="col-md-3"><label>Surface m² *</label><input name="surface_m2" type="number" step="0.01" class="form-control" required></div>
<div class="col-md-3"><label>Ref EL</label><input name="references_el" class="form-control"></div>
<div class="col-md-3"><label>Ref RFU</label><input name="references_rfu" class="form-control"></div>
<div class="col-md-3"><label>Code Bloc</label><input name="code_bloc" class="form-control"></div>
<div class="col-md-3"><label>N° TF (si a TF)</label><input name="numero_tf" class="form-control"></div>
<div class="col-md-12"><div class="form-check"><input type="checkbox" name="a_titre_foncier" value="1" class="form-check-input"><label class="form-check-label">A Titre Foncier ?</label></div></div>
<div class="col-md-3"><label>Limite Nord</label><input name="limite_nord" class="form-control"></div>
<div class="col-md-3"><label>Limite Est</label><input name="limite_est" class="form-control"></div>
<div class="col-md-3"><label>Limite Sud</label><input name="limite_sud" class="form-control"></div>
<div class="col-md-3"><label>Limite Ouest</label><input name="limite_ouest" class="form-control"></div>
</div>

<h4 class="bg-warning p-2">3. Dossier & Bornage</h4>
<div class="row g-3 mb-4">
<div class="col-md-4">
<label>Type Procédure *</label>
<select name="type_procedure" class="form-select" required>
<option value="demande_cadastre">Demande d'enregistrement</option>
<option value="avis_bornage">Avis de bornage</option>
<option value="convocation_bornage">Convocation de bornage</option>
</select>
</div>
<div class="col-md-4"><label>Date Demande *</label><input name="date_demande" type="date" value="{{ date('Y-m-d') }}" class="form-control" required></div>
<div class="col-md-4"><label>Date Bornage *</label><input name="date_bornage" type="date" class="form-control" required></div>
<div class="col-md-4"><label>Heure Bornage</label><input name="heure_bornage" type="time" class="form-control"></div>
<div class="col-md-8"><label>Lieu RDV Bornage *</label><input name="lieu_rdv" placeholder="Ex: Sur la parcelle à Togba" class="form-control" required></div>
</div>

<button class="btn btn-primary btn-lg w-100">💾 ENREGISTRER LE DOSSIER</button>
</form>
</div>
</body>
</html>