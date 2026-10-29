<!DOCTYPE html><html><head><meta charset="utf-8"><style>body{font-family:DejaVu Sans;font-size:12px}h2{text-align:center} .box{border:2px solid #000;padding:20px}</style></head><body>
<h2>AVIS DE BORNAGE</h2>
<div class="box">
<p><b>Dossier:</b> {{ $dossier->numero_dossier }}</p>
<p>Il est porté à la connaissance du public et des riverains que l'opération de bornage de la parcelle ci-dessous aura lieu le :</p>
<p style="text-align:center;font-size:14px"><b>Date: {{ \Carbon\Carbon::parse($dossier->bornage->date_bornage)->format('d/m/Y') }} à {{ $dossier->bornage->heure_bornage }}<br>Lieu de RDV: {{ $dossier->bornage->lieu_rdv }}</b></p>
<p><b>Propriétaire:</b> {{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }} (NPI: {{ $dossier->proprietaire->npi }})<br>
<b>Parcelle:</b> {{ $dossier->parcelle->commune }} - {{ $dossier->parcelle->quartier_village }} - Parcelle N° {{ $dossier->parcelle->numero_parcelle }} - {{ $dossier->parcelle->surface_m2 }} m²</p>
<p>La présence de tous les riverains est vivement souhaitée. Les oppositions éventuelles seront reçues sur place par le Géomètre.</p>
<br><p style="text-align:right">Le Chef Service Cadastre<br>Abomey-Calavi</p>
</div></body></html>