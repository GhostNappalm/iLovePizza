<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricetta extends Model
{
    //we
    protected $table = 'ricettas';
    //use HasFactory;
    protected $fillable =[
        'nome',
        'ingredienti',
        'preparazione',
        'romana',
        'napoletana',
        'resto',
        'internazionale',
        'light',
        'vegetariano',
        'senzaglutine',
        'senzalattosio',
        'cottura',
        'immagine',
        'utente_id',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Utente_Ricetta()
    {
        return $this->hasMany('App\Models\Utente_Ricetta');
    }
}
