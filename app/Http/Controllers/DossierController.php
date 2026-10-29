<?php
namespace App\Http\Controllers;
use App\Models\Proprietaire;
use App\Models\Parcelle;
use App\Models\Dossier;
use App\Models\Bornage;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DossierController extends Controller
{
    public function index() {
        $dossiers = Dossier::with(['proprietaire','parcelle','bornage'])->latest()->get();
        return view('dossiers.index', compact('dossiers'));
    }
    public function create() { return view('dossiers.create'); }
    
    public function store(Request $request) {
        $request->validate([
            'npi' => 'required|unique:proprietaires,npi',
            'nom' => 'required', 'prenoms' => 'required', 'domicile' => 'required', 'telephone' => 'required',
            'commune' => 'required', 'arrondissement' => 'required', 'quartier_village' => 'required',
            'numero_parcelle' => 'required', 'surface_m2' => 'required|numeric',
            'type_procedure' => 'required', 'date_demande' => 'required|date',
            'date_bornage' => 'required|date', 'lieu_rdv' => 'required',
        ]);
        $prop = Proprietaire::create($request->only(['npi','nom','prenoms','profession','domicile','telephone','email']));
        $parcelle = Parcelle::create($request->only(['commune','arrondissement','quartier_village','nom_lotissement','ilot','numero_parcelle','references_el','references_rfu','code_bloc','surface_m2','a_titre_foncier','numero_tf','limite_nord','limite_est','limite_sud','limite_ouest']));
        $numero = 'DOS-'.date('Y').'-'.str_pad(Dossier::count()+1, 4, '0', STR_PAD_LEFT);
        $dossier = Dossier::create(['numero_dossier' => $numero,'proprietaire_id' => $prop->id,'parcelle_id' => $parcelle->id,'type_procedure' => $request->type_procedure,'date_demande' => $request->date_demande,'statut' => 'en_cours']);
        Bornage::create(['dossier_id' => $dossier->id,'date_bornage' => $request->date_bornage,'heure_bornage' => $request->heure_bornage,'lieu_rdv' => $request->lieu_rdv,'date_etablissement' => now(),]);
        return redirect()->route('dossiers.show', $dossier)->with('success', 'Dossier '.$numero.' créé !');
    }
    public function show(Dossier $dossier) { $dossier->load(['proprietaire','parcelle','bornage']); return view('dossiers.show', compact('dossier')); }

    public function edit(Dossier $dossier) { $dossier->load(['proprietaire','parcelle','bornage']); return view('dossiers.edit', compact('dossier')); }

    public function update(Request $request, Dossier $dossier) {
        $dossier->load(['proprietaire','parcelle','bornage']);
        $dossier->proprietaire->update($request->only(['nom','prenoms','profession','domicile','telephone','email']));
        $dossier->parcelle->update($request->only(['commune','arrondissement','quartier_village','nom_lotissement','ilot','numero_parcelle','references_el','references_rfu','code_bloc','surface_m2','a_titre_foncier','numero_tf','limite_nord','limite_est','limite_sud','limite_ouest']));
        $dossier->bornage->update(['date_bornage'=>$request->date_bornage,'heure_bornage'=>$request->heure_bornage,'lieu_rdv'=>$request->lieu_rdv]);
        $dossier->update(['type_procedure'=>$request->type_procedure,'date_demande'=>$request->date_demande]);
        return redirect()->route('dossiers.show',$dossier)->with('success','Modifié !');
    }

    public function destroy(Dossier $dossier) {
        $dossier->delete(); // supprime aussi par cascade si configuré, sinon on supprime manuellement
        $dossier->proprietaire()->delete();
        $dossier->parcelle()->delete();
        $dossier->bornage()->delete();
        return redirect()->route('dossiers.index')->with('success','Dossier supprimé');
    }

    public function pdf(Dossier $dossier, $type) {
        $dossier->load(['proprietaire','parcelle','bornage']);
        $view = match($type) {'demande'=>'pdf.demande','avis'=>'pdf.avis','convocation'=>'pdf.convocation',default=>'pdf.demande'};
        $pdf = Pdf::loadView($view, compact('dossier'));
        return $pdf->stream($type.'-'.$dossier->numero_dossier.'.pdf');
    }
}