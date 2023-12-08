<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;
use Illuminate\Support\Composer;

class ApprenantController extends Controller
{
    public function liste_apprenant()
    {
        $apprenants = Apprenant::all();
        return view('apprenant.liste', compact('apprenants'));
    }

    public function ajouter_apprenant()
    {
        return view('apprenant.ajouter');
    }

    public function ajouter_apprenant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required'
        ]);

        $apprenant = new Apprenant();
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->save();

        return redirect('/ajouter')->with('status', 'L\'apprenant a bien été ajouté avec succès.');
    }
    public function update_apprenant()
    {
        return view('apprenant.update');
    }
}
