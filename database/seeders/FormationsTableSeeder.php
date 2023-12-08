<?php

namespace Database\Seeders;

// database/seeders/FormationsTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationsTableSeeder extends Seeder
{
    public function run()
    {
        // Exemples de formations
        $formations = [
            ['nom' => 'Formation A', 'description' => 'Description de la formation A'],
            ['nom' => 'Formation B', 'description' => 'Description de la formation B'],
            // Ajoutez autant d'exemples que nécessaire
        ];

        // Boucle pour insérer les données
        foreach ($formations as $formation) {
            Formation::create($formation);
        }
    }
}
