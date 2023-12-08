<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    public function up(): void
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->default(''); // Ajoutez cette ligne pour définir une valeur par défaut
            $table->text('description');
            $table->timestamps();
        });

        // Exemples de formations
        \App\Models\Formation::create([
            'nom' => 'Formation Laravel',
            'description' => 'Formation avancée sur le framework Laravel.'
        ]);

        \App\Models\Formation::create([
            'nom' => 'Formation Vue.js',
            'description' => 'Formation complète sur le framework JavaScript Vue.js.'
        ]);

        // Ajoutez d'autres exemples si nécessaire...
    }

    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
