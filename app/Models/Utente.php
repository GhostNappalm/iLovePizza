<?php

namespace App\Models;

use App\Models\Associazione_Utente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utente extends Authenticatable
{
    //we
    use HasFactory;

    protected $fillable =[
        'email',
        'username',
        'nome',
        'cognome',
        'password',
        ];

    public function getCustomAttribute()
    {
        if(Auth::check())
        {
            $uid=Auth::user()->id;
            if(Utente::find($uid)->Associazione_Utente!=null)
            {
                return Utente::find($uid)->Associazione_Utente->ruolo;
            }
        }
        return 0;
    }

    public function Associazione()
    {
        return $this->hasOne('App\Models\Associazione');
    }


    public function Ricetta()
    {
        return $this->hasMany('App\Models\Ricetta');
    }

    public function Commento()
    {
        return $this->hasMany('App\Models\Commento');
    }

    public function Consiglio()
    {
        return $this->hasMany('App\Models\Consiglio');
    }

    public function Associazione_Utente()
    {
        return $this->hasOne('App\Models\Associazione_Utente');
    }

    public function Utente_Consiglio()
    {
        return $this->hasMany('App\Models\Utente_Consiglio');
    }

    public function Utente_Ricetta()
    {
        return $this->hasMany('App\Models\Utente_Ricetta');
    }

}
