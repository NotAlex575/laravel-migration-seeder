<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    public function run(): void
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Roma Termini',
                'stazione_arrivo' => 'Milano Centrale',
                'orario_partenza' => '2025-11-25 08:30:00',
                'orario_arrivo' => '2025-11-25 12:45:00',
                'codice_treno' => 'T1234',
                'totale_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
                'totale_posti' => 500,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Napoli Centrale',
                'stazione_arrivo' => 'Firenze Santa Maria Novella',
                'orario_partenza' => '2025-11-25 09:15:00',
                'orario_arrivo' => '2025-11-25 12:00:00',
                'codice_treno' => 'I5678',
                'totale_carrozze' => 8,
                'in_orario' => false,
                'cancellato' => false,
                'totale_posti' => 400,
            ],
            [
                'azienda' => 'Trenord',
                'stazione_partenza' => 'Milano Centrale',
                'stazione_arrivo' => 'Bergamo',
                'orario_partenza' => '2025-11-25 14:00:00',
                'orario_arrivo' => '2025-11-25 15:15:00',
                'codice_treno' => 'TN9012',
                'totale_carrozze' => 5,
                'in_orario' => true,
                'cancellato' => false,
                'totale_posti' => 250,
            ],
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->totale_carrozze = $train['totale_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->totale_posti = $train['totale_posti'];
            $newTrain->save();
        }
    }
}
