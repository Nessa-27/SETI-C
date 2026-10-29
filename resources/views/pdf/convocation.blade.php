<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
    @page { size: A4; margin: 13mm 16mm 9mm 16mm; }
    body { font-family: DejaVu Sans, sans-serif; font-size: 10px; line-height: 1.42; color:#000; margin:0; padding:0; }
    .header { text-align: center; border-bottom: 1.8px solid #c0004a; padding-bottom: 6px; margin-bottom: 8px; }
    .rep { color:#0a4a8a; font-weight:bold; font-size:8.5px; }
    .ordre { color:#0a4a8a; font-weight:bold; font-size:12px; font-style:italic; }
    .soc { color:#e67e00; font-weight:bold; font-size:9px; }
    .contact { font-size:7px; }
    .title { text-align:center; font-weight:bold; text-decoration:underline; font-size:11px; margin: 8px 0 2px 0; }
    .decret { text-align:center; font-size:6.5px; font-style:italic; margin-bottom:8px; line-height:1.2 }
    .dotted { border-bottom: 1px dotted #000; display:inline-block; min-width:50px; padding:0 3px; font-weight:bold; }
    .field { margin: 3px 0; text-align:justify }
    .limit { margin: 2px 0; }
    .nb { font-size:8.5px; margin-top:6px; text-align:justify; line-height:1.3 }
    .sign { text-align:center; margin-top:12px; line-height:1.3 }
    .dashed-sep { border-top: 1.5px dashed #000; margin: 14px 0 6px 0; }
    .accuse-title { text-align:center; font-weight:bold; text-decoration:underline; font-size:11px; margin-bottom:4px; }
    .accuse-text { font-size:9.5px; text-align:justify; line-height:1.35; margin:0; }
</style>
</head>
<body>

<div class="header">
    <div class="rep">REPUBLIQUE DU BENIN</div>
    <div class="ordre">ORDRE DES GEOMETRES EXPERTS</div>
    <div class="soc">SOCIETE D'ETUDES TOPOGRAPHIQUES ET D'INGENIERIE-CONSEILS BTP</div>
    <div class="contact">02 BP : 2781-COTONOU TEL : (229) 01 97 07 16 39 / 01 94 97 99 99 ; E-mail : societe.setic@gmail.com</div>
</div>

<div class="title">CONVOCATION À BORNAGE CONTRADICTOIRE</div>
<div class="decret">Décret n°2025-176 du 09 avril 2025, portant modalités de mise en œuvre du numéro unique parcellaire, de confirmation cadastrale des droits fonciers et de mise à jour du cadastre national</div>

<p class="field"><i>Dossier N°</i> <span class="dotted" style="width:200px">{{ $dossier->numero_dossier }}</span></p>

<p class="field">
Nous, <b>Ephrem C. Jean-Pierre DOSSOU</b>, Géomètre-Expert dûment assermenté, agréé près l'Agence Nationale des Domaines et du Foncier pour les enregistrements individuels des parcelles au cadastre, avons l'honneur d'informer le Chef de quartier/village <span class="dotted" style="width:230px">{{ $dossier->parcelle->quartier_village }}</span> qu'il sera procédé par nous, le <span class="dotted" style="width:100px">{{ \Carbon\Carbon::parse($dossier->bornage->date_bornage)->format('d/m/Y') }}</span> à <span class="dotted" style="width:45px">{{ $dossier->bornage->heure_bornage }}</span> heure(s) au bornage contradictoire d'un immeuble situé à :
</p>

<p class="field">
Commune <span class="dotted" style="width:190px">{{ $dossier->parcelle->commune }}</span> Arrondissement <span class="dotted" style="width:150px">{{ $dossier->parcelle->arrondissement }}</span> Quartier/Village <span class="dotted" style="width:130px">{{ $dossier->parcelle->quartier_village }}</span><br>
Nom du Lotissement <span class="dotted" style="width:150px">{{ $dossier->parcelle->nom_lotissement }}</span> Îlot <span class="dotted" style="width:65px">{{ $dossier->parcelle->ilot }}</span> Parcelle <span class="dotted" style="width:65px">{{ $dossier->parcelle->numero_parcelle }}</span> consistant <span class="dotted" style="width:120px">{{ $dossier->parcelle->surface_m2 }} m²</span>
</p>

<p class="field">d'une contenance de ( ) hectares ( ) ares ( <span class="dotted" style="width:40px">{{ $dossier->parcelle->surface_m2 }}</span> ) centiares, limité :</p>

<p class="limit"><b>Au Nord</b> <span class="dotted" style="width:88%">{{ $dossier->parcelle->limite_nord }}</span></p>
<p class="limit"><b>A l'Est</b> <span class="dotted" style="width:89%">{{ $dossier->parcelle->limite_est }}</span></p>
<p class="limit"><b>Au Sud</b> <span class="dotted" style="width:88%">{{ $dossier->parcelle->limite_sud }}</span></p>
<p class="limit"><b>A l'Ouest</b> <span class="dotted" style="width:87%">{{ $dossier->parcelle->limite_ouest }}</span></p>

<p class="field">et dont l'enregistrement au cadastre national a été demandé par M <span class="dotted" style="width:320px">{{ $dossier->proprietaire->nom }} {{ $dossier->proprietaire->prenoms }}</span>, Et le convoquons à assister en personne audit bornage ou s'y faire représenter par un mandataire régulier.</p>

<p class="nb">
<b><u>NB. :</u> Un Procès-Verbal de bornage sera établi et signé par toutes les parties invitées au bornage. Les représentants signent d'office pour le compte des personnes représentées. Les photos des témoins, du requérant et du chef de village ou de quartier, ainsi que des copies des cartes CIP ou toute autres pièces portant le numéro personnel d'identification, seront prises lors de l'opération, selon les dispositions pratiques de l'enregistrement au cadastre.</b>
</p>

<div class="sign">
    Fait à Calavi, le <span class="dotted" style="width:130px">{{ \Carbon\Carbon::parse($dossier->bornage->date_etablissement)->format('d/m/Y') }}</span><br>
    Le Géomètre-Expert,<br><br>
    <b><u>Ephrem C. Jean-Pierre DOSSOU</u></b>
</div>

<div class="dashed-sep"></div>
<div class="accuse-title">ACCUSÉ DE RÉCEPTION</div>
<p class="accuse-text">
<i>Dossier N°</i> <span class="dotted" style="width:130px">{{ $dossier->numero_dossier }}</span> M <span class="dotted" style="width:60%"></span> soussigné(e) reconnaît avoir reçu une convocation pour assister au bornage contradictoire de la propriété faisant l'objet de la procédure d'enregistrement au cadastre national, engagée par demande numéro <span class="dotted" style="width:140px">{{ $dossier->numero_dossier }}</span>, opération fixée au <span class="dotted" style="width:90px">{{ \Carbon\Carbon::parse($dossier->bornage->date_bornage)->format('d/m/Y') }}</span> à <span class="dotted" style="width:40px">{{ $dossier->bornage->heure_bornage }}</span> heure(s)<br><br>
A <span class="dotted" style="width:200px"></span>, le <span class="dotted" style="width:120px"></span> Deux mil vingt cinq
</p>

</body>
</html>