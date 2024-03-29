<?php

namespace Database\Seeders;

use App\Models\Utente_Consiglio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utente_Ricetta;

/**
 * Autore: Venuto
 */
class UtenteRicettaSeeder extends Seeder
{
        public function run()
    {
        // ----------- VALUTAZIONE DI UNA RICETTA DA PARTE DI UN UTENTE (OGNI UTENTE VALUTA AL MASSIMO 4 RICETTE) -----------
        /*for($i=33;$i<=50;$i++) {
            Utente_Ricetta::create([
                'utente_id' => $i,
                'consiglio_id' => range(1, 5, 0.5), //rand(1, 5),
                'voto' => rand(1, 5),
            ]);
            Utente_Ricetta::create([
                'utente_id' => $i,
                'consiglio_id' => rand(6, 10),
            ]);
        }*/
        for($i=1; $i<=50; $i++)
        {
            $voto = range(1, 5); //1 è il minimo voto applicabile
            $ricetta = range(1, 12); //12 = num max di ricette

            shuffle($voto);
            shuffle($ricetta);

            for($l=1; $l<=rand(0,4); $l++){
                Utente_Ricetta::create([
                        'utente_id' => $i,
                        'ricetta_id' => $ricetta[$l],
                        'voto' => $voto[$l]
            ]);
            }
        }
    }
}
