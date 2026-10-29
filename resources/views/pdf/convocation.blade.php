<!DOCTYPE html><html><head><meta charset="utf-8"><style>body{font-family:DejaVu Sans;font-size:12px}h2{text-align:center} .box{border:1px solid #000;padding:20px}</style></head><body>
<h2>CONVOCATION DE BORNAGE</h2>
<div class="box">
<p><b>N° Dossier:</b> {{ $dossier->numero_dossier }}</p>
<p><b>À l'attention des riverains de la parcelle de M/Mme {{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }}</b></p>
<p>Sise à: {{ $dossier->parcelle->commune }}, {{ $dossier->parcelle->arrondissement }}, {{ $dossier->parcelle->quartier_village }}, Lotissement {{ $dossier->parcelle->nom_lotissement }}, Ilot {{ $dossier->parcelle->ilot }}, Parcelle {{ $dossier->parcelle->numero_parcelle }}</p>
<p>Vous êtes conviés à assister à l'opération de bornage contradictoire qui se déroulera le :</p>
<p style="text-align:center;font-size:14px"><b>{{ \Carbon\Carbon::parse($dossier->bornage->date_bornage)->format('d/m/Y') }} à {{ $dossier->bornage->heure_bornage }}<br>Au lieu dit: {{ $dossier->bornage->lieu_rdv }}</b></p>
<p>Limites déclarées: N:{{ $dossier->parcelle->limite_nord }}, S:{{ $dossier->parcelle->limite_sud }}, E:{{ $dossier->parcelle->limite_est }}, O:{{ $dossier->parcelle->limite_ouest }}</p>
<p>Veuillez vous munir de vos pièces d'identité et titres de propriété. Votre présence est indispensable.</p>
<br><p style="text-align:right">Fait à Abomey-Calavi, le {{ date('d/m/Y') }}<br><br>Le Géomètre Expert</p>
</div></body></html>