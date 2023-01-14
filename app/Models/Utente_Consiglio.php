<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente_Consiglio extends Model
{
    //use HasFactory;
    protected $table = 'utente_consiglios';

    protected $fillable = [
        'utente_id',
        'consiglio_id',
    ];

    public function Utente()
    {
        return $this->belongsToMany('App\Utente');
    }

    public function Consiglio()
    {
        return $this->belongsToMany('App\Consiglio');
    }
}
