<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Bornage extends Model {
    protected $fillable = ['dossier_id','date_bornage','heure_bornage','lieu_rdv','geometre_nom','cabinet_nom','lieu_etablissement','date_etablissement'];
    public function dossier() { return $this->belongsTo(Dossier::class); }
}