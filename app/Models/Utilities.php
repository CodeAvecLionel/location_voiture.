<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primarykey = 'id';
    protected $fillable = [
        'phone',
        'adresse',
        'desc_site',
        'email',
        'flotte_de_voiture',
        'tarifs_competitif',
        'facilite_de_reservation_en_ligne',
        'service_clientele',
        'assurance_securite',
        'programe_de_facilite',
        'appel_a_laction',
        'nos_marques',
        'personnel',
        'partenaire'
    ];

    public function getContact(){
        return Utilities::all();
    }

    public function getQuisommesNous(){
        return Utilities::all();
    }
}
