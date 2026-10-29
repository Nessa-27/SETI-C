<!DOCTYPE html><html><head><meta charset="utf-8"><style>body{font-family:DejaVu Sans;font-size:12px}h2{text-align:center} .box{border:1px solid #000;padding:15px;margin-top:20px}</style></head><body>
<h2>REPUBLIQUE DU BENIN<br>MAIRIE D'ABOMEY-CALAVI<br>DEMANDE D'ENREGISTREMENT</h2>
<div class="box">
<p><b>Dossier N°:</b> {{ $dossier->numero_dossier }} - Date: {{ $dossier->date_demande }}</p>
<p><b>Je soussigné(e):</b> {{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }}<br>
NPI: {{ $dossier->proprietaire->npi }} - Profession: {{ $dossier->proprietaire->profession }}<br>
Domicile: {{ $dossier->proprietaire->domicile }} - Tel: {{ $dossier->proprietaire->telephone }}</p>
<p><b>Demande l'enregistrement de la parcelle sise à:</b><br>
Commune: {{ $dossier->parcelle->commune }}, Arrondissement: {{ $dossier->parcelle->arrondissement }}, Quartier: {{ $dossier->parcelle->quartier_village }}<br>
Lotissement: {{ $dossier->parcelle->nom_lotissement }} - Ilot: {{ $dossier->parcelle->ilot }} - Parcelle N°: {{ $dossier->parcelle->numero_parcelle }}<br>
Surface: {{ $dossier->parcelle->surface_m2 }} m² - Ref EL: {{ $dossier->parcelle->references_el }} / RFU: {{ $dossier->parcelle->references_rfu }}</p>
<p><b>Limites:</b> Nord: {{ $dossier->parcelle->limite_nord }}, Sud: {{ $dossier->parcelle->limite_sud }}, Est: {{ $dossier->parcelle->limite_est }}, Ouest: {{ $dossier->parcelle->limite_ouest }}</p>
<br><br><p style="text-align:right">Fait à Abomey-Calavi, le {{ date('d/m/Y') }}<br><br>Signature du demandeur</p>
</div></body></html>