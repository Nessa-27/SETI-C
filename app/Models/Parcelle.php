<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Parcelle extends Model {
    protected $fillable = ['commune','arrondissement','quartier_village','nom_lotissement','ilot','numero_parcelle','references_el','references_rfu','code_bloc','surface_m2','a_titre_foncier','numero_tf','limite_nord','limite_est','limite_sud','limite_ouest'];
    public function dossiers() { return $this->hasMany(Dossier::class); }
}