<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<style>
body{font-family: DejaVu Sans, sans-serif; font-size:10.5px; line-height:1.5; padding:20px 30px}
.header{text-align:center; border-bottom:2px solid #b00; padding-bottom:8px}
.header small{font-size:8px; color:#b00}
.logo{float:left; width:50px; font-size:30px; color:#b00}
.title{text-align:center; font-weight:bold; text-decoration:underline; margin:15px 0; font-size:12px}
.line{border-bottom:1px dotted #000; display:inline-block; min-width:100px; padding:0 4px; font-weight:bold}
.field{margin:4px 0}
.signature{text-align:center; margin-top:25px}
</style>
</head>
<body>
<div class="header">
<div class="logo">§</div>
REPUBLIQUE DU BENIN<br>
<span style="color:#0a3a7a; font-weight:bold; font-style:italic">ORDRE DES GEOMETRES EXPERTS</span><br>
<span style="color:#d68a00; font-weight:bold; font-size:9px">SOCIETE D'ETUDES TOPOGRAPHIQUES ET D'INGENIERIE-CONSEILS BTP</span><br>
<small>02 BP : 2781-COTONOU TEL : (229) 01 97 07 16 39 / 01 94 97 99 99 ; E-mail : societe.setic@gmail.com</small>
</div>

<div class="title">AVIS DE BORNAGE CONTRADICTOIRE EN VUE DE L'ENREGISTREMENT<br>AU CADASTRE NATIONAL</div>
<div style="font-size:7px; text-align:center">Décret n°2025-176 du 09 avril 2025, portant modalités de mise en œuvre du numéro unique parcellaire,<br>de confirmation cadastrale des droits fonciers et de mise à jour du cadastre national</div>

<p class="field"><i>Dossier N°</i> <span class="line">{{ $dossier->numero_dossier }}</span></p>
<p>Le Directeur de la Société d'Etudes Topographiques et d'Ingénierie-Conseils BTP (SETI-C BTP) soussigné, a l'honneur d'informer le public qu'il sera procédé par ses soins le <span class="line">{{ \Carbon\Carbon::parse($dossier->bornage->date_bornage)->format('d/m/Y') }}</span> à <span class="line">{{ $dossier->bornage->heure_bornage }}</span> heure(s), au bornage contradictoire d'un immeuble situé à :</p>
<p>Commune <span class="line">{{ $dossier->parcelle->commune }}</span> Arrondissement <span class="line">{{ $dossier->parcelle->arrondissement }}</span> Quartier/Village <span class="line">{{ $dossier->parcelle->quartier_village }}</span><br>
Nom du Lotissement <span class="line">{{ $dossier->parcelle->nom_lotissement }}</span> Îlot <span class="line">{{ $dossier->parcelle->ilot }}</span> Parcelle <span class="line">{{ $dossier->parcelle->numero_parcelle }}</span> consistant <span class="line">{{ $dossier->parcelle->surface_m2 }} m²</span><br>
d'une contenance de ( ) hectares ( ) ares ( <span class="line">{{ $dossier->parcelle->surface_m2 }}</span> ) centiares,<br>Et limité :<br>
Au Nord <span class="line" style="width:80%">{{ $dossier->parcelle->limite_nord }}</span><br>
A l'Est <span class="line" style="width:80%">{{ $dossier->parcelle->limite_est }}</span><br>
Au Sud <span class="line" style="width:80%">{{ $dossier->parcelle->limite_sud }}</span><br>
A l'Ouest <span class="line" style="width:80%">{{ $dossier->parcelle->limite_ouest }}</span></p>

<p>et dont l'enregistrement au cadastre national a été demandé par M <span class="line">{{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }}</span>,</p>
<p>L'immeuble ne disposant pas d'un titre foncier ou d'un document de présomption de propriété (attestation de recasement, attestation de détention coutumière, avis d'imposition des trois dernières années, certificat foncier rural, décision de justice exécutoire rendue en matière foncière sur la parcelle concernée), une enquête publique contradictoire sera exécutée par la SVGF/SUGF et sanctionnée par un procès-verbal.<br>Toutes personnes intéressées, sont invitées à y assister ou à s'y faire représenter par un mandataire muni d'un pouvoir régulier.</p>

<div class="signature">Fait à Calavi, le {{ \Carbon\Carbon::parse($dossier->bornage->date_etablissement)->format('d/m/Y') }}<br><br>Le Géomètre-Expert,<br><br><br><b><u>Ephrem C. Jean-Pierre DOSSOU</u></b></div>
</body>
</html>