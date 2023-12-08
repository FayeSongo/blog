<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insérez des exemples de formations
        DB::table('formations')->insert([
            'nom' => 'Formation PHP',
            'description' => 'Formation complète sur PHP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('formations')->insert([
            'nom' => 'Formation Laravel',
            'description' => 'Formation avancée sur le framework Laravel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ajoutez d'autres exemples de formations si nécessaire
    }
}
