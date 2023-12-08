<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function liste_formation()
    {
        // Récupère toutes les formations depuis la base de données
        $formations = Formation::all();

        return view('formation.liste', ['formations' => $formations]);
    }

    public function ajouter_formation()
    {
        return view('formation.ajouter');
    }

    public function ajouter_formation_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        // Crée une nouvelle formation
        $formation = new Formation();
        $formation->nom = $request->nom;
        $formation->description = $request->description;
        $formation->save();

        return redirect('/ajouter-formation')->with('status', 'La formation a bien été ajoutée avec succès.');
    }

    // Ajoutez d'autres méthodes si nécessaire, par exemple, pour la mise à jour et la suppression de formations.
}
