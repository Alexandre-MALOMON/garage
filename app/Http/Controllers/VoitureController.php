<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'categorie_id' => 'required|integer',
            'photo' => 'required|mimes:png,jpg',
            'marque_id' => 'required',
            'model_id' => 'required',
            'annee_id' => 'required',
            'prix'  => 'required',
            'description'  => 'required',
        ]);

        $voiture = Voiture::create([
            'categorie_id' => $request->categorie_id,
            'photo' => $request->photo,
            'marque_id' => $request->marque_id,
            'model_id' => $request->model_id,
            'annee_id' => $request->annee_id,
            'prix' => $request->prix,
            'description' => $request->description,
        ]);

        return response([
            'status' => 200,
            'voiture' => $voiture
        ]);
    }

    public function index()
    {
        $voiture = Voiture::orderBy('id', 'asc')->with('categorie','modele','marque','year')->get();
        return response([
            'status' => 200,
            'voiture' => $voiture
        ]);
    }

    public function update(Request $request,  $id)
    {

        $voiture = Voiture::find($id);
        $voitureRequest = $this->validate($request, [
            'categorie_id' => 'required|integer',
            'photo' => 'required|mimes:png,jpg',
            'marque_id' => 'required',
            'model_id' => 'required',
            'annee_id' => 'required',
            'prix'  => 'required',
            'description'  => 'required',
        ]);
        // dd($voitureRequest);
        $voitureUpdate = $voiture->update([
            'categorie_id' => $request->categorie_id,
            'photo' => $request->photo,
            'marque_id' => $request->marque_id,
            'model_id' => $request->model_id,
            'annee_id' => $request->annee_id,
            'prix' => $request->prix,
            'description' => $request->description,
        ]);

        return response([
            'status' => 200,
            'voitureUpdate' => $voitureUpdate
        ]);
    }

    public function destroy($id)
    {
        $voiture = Voiture::find($id);
        if ($voiture) {
            $voiture->delete();

            return response([
                'status' => 200,
                'voiture' => $voiture
            ]);
        }
    }

    public function show(Voiture $voi, $id)
    {
        $voiture = Voiture::with('categorie')->find($id);

        return response([
            'status' => 200,
            'voiture' => $voiture
        ]);
    }
}
