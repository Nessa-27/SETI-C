<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<style>
body{font-family: DejaVu Sans, sans-serif; font-size:11px; line-height:1.4; padding:15px 25px}
.header-top{text-align:center; font-size:9px; line-height:1.2}
.header-top b{font-size:10px}
.title-box{border:2px solid #000; border-radius:12px; text-align:center; padding:8px; margin:12px 30px; font-weight:bold; font-size:14px; text-transform:uppercase}
.line{border-bottom:1px dotted #000; display:inline-block; min-width:150px; padding:0 5px}
.label{font-weight:bold}
.section-title{font-weight:bold; text-align:center; margin:15px 0; font-size:12px}
.footer{font-size:8px; border:1px solid #000; padding:4px; display:inline-block; margin-top:15px}
.colors{margin-top:20px; text-align:center} .colors span{display:inline-block; width:60px; height:12px; margin:0 2px}
</style>
</head>
<body>
<div style="display:flex; justify-content:space-between">
<div style="font-size:8px; text-align:center"><img src="data:image/png;base64,iVBORw0KGgo=" width="40"><br>MINISTERE DE L'ECONOMIE<br>ET DES FINANCES<br>REPUBLIQUE DU BENIN</div>
<div style="font-size:8px; text-align:right">368, Avenue Pape Jean Paul II ; 01 BP 302<br>COTONOU Tél : 21 30 10 20 – Fax : 21 30 18 51<br>www.finances.bj</div>
</div>
<div style="text-align:center; font-weight:bold; font-size:11px; border-bottom:2px solid #000; padding-bottom:5px">AGENCE NATIONALE DU DOMAINE ET DU FONCIER</div>
<div class="title-box">Demande d'enregistrement d'une parcelle au cadastre national</div>
<div class="section-title">Informations sur la parcelle :</div>
<p><span class="label">Commune :</span> <span class="line">{{ $dossier->parcelle->commune }}</span> <span class="label">Arrondissement :</span> <span class="line">{{ $dossier->parcelle->arrondissement }}</span></p>
<p><span class="label">Quartier/Village :</span> <span class="line">{{ $dossier->parcelle->quartier_village }}</span></p>
<p><span class="label">Références de la parcelle (n° EL, lot, parcelle, références RFU) :</span> <span class="line">{{ $dossier->parcelle->numero_parcelle }} / EL: {{ $dossier->parcelle->references_el }}</span></p>
<p><span class="label">Surface (en m²) :</span> <span class="line">{{ $dossier->parcelle->surface_m2 }} m²</span> <span class="label">Code Bloc de la parcelle :</span> <span class="line">{{ $dossier->parcelle->code_bloc }}</span></p>
<p><span class="label">La parcelle dispose-t-elle d'un titre foncier :</span> NON <span style="border:1px solid #000; width:12px; height:12px; display:inline-block">{{ $dossier->parcelle->a_titre_foncier ? '' : 'X' }}</span> OUI <span style="border:1px solid #000; width:12px; height:12px; display:inline-block">{{ $dossier->parcelle->a_titre_foncier ? 'X' : '' }}</span> n° du TF <span class="line">{{ $dossier->parcelle->numero_tf }}</span></p>

<div class="section-title">Identification du propriétaire ou présumé-propriétaire :</div>
<p><span class="label">NPI* :</span> <span class="line">{{ $dossier->proprietaire->npi }}</span></p>
<p><span class="label">Nom* :</span> <span class="line">{{ $dossier->proprietaire->nom }}</span></p>
<p><span class="label">Prénoms* :</span> <span class="line">{{ $dossier->proprietaire->prenoms }}</span></p>
<p><span class="label">Profession :</span> <span class="line">{{ $dossier->proprietaire->profession }}</span></p>
<p><span class="label">Domicile :</span> <span class="line">{{ $dossier->proprietaire->domicile }}</span></p>
<p><span class="label">Téléphone* :</span> <span class="line">{{ $dossier->proprietaire->telephone }}</span></p>
<p><span class="label">Email :</span> <span class="line">{{ $dossier->proprietaire->email }}</span></p>

<p style="font-size:9px">*: champ obligatoire<br><b>Pièces jointes :</b><br>1. Copie CIP ou Carte d'Identité Biométrique<br>2. Actes justificatifs de droits ou toutes autres pièces se rattachant à la parcelle (citer les actes produits)</p>
<p style="text-align:right; margin-top:30px"><b>Date et Signature du demandeur</b></p>

<div class="footer">N.B. : L'authenticité des actes produits engage<br>entièrement la responsabilité du demandeur</div>
<div class="colors"><span style="background:#1a5a3a"></span><span style="background:#f7d000"></span><span style="background:#a00a2a"></span></div>
</body>
</html>