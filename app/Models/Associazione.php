<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Associazione extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'romana',
        'napoletana',
        'resto',
        'internazionale',
        'capo',
        ];

    public function Utente()
    {
        return $this->belongsTo('App\Utente');
    }

    public function Associazione_Utente()
    {
        return $this->hasMany('App\Associazione_Utente');
    }
}
