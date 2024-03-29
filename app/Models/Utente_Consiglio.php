<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Autore: Baso
 */
class Utente_Consiglio extends Model
{
    protected $table = 'utente_consiglios';

    protected $fillable = [
        'utente_id',
        'consiglio_id',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Consiglio()
    {
        return $this->belongsToMany('App\Models\Consiglio');
    }
}
