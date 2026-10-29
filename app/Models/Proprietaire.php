<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Proprietaire extends Model {
    protected $fillable = ['npi','nom','prenoms','profession','domicile','telephone','email'];
    public function dossiers() { return $this->hasMany(Dossier::class); }
}