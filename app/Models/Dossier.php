<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Dossier extends Model {
    protected $fillable = ['numero_dossier','proprietaire_id','parcelle_id','type_procedure','date_demande','statut'];
    public function proprietaire() { return $this->belongsTo(Proprietaire::class); }
    public function parcelle() { return $this->belongsTo(Parcelle::class); }
    public function bornage() { return $this->hasOne(Bornage::class); }
}