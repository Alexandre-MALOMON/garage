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
            'categorie_id' => 'required',
            'name' => 'required|unique:voitures',
            'serie' => 'required',
            'roue' => 'required|integer'
        ]);

        $voiture = Voiture::create([
            'categorie_id' => $request->categorie_id,
            'serie' => $request->serie,
            'name' => $request->name,
            'roue' => $request->roue,
        ]);

        return response([
            'status' => 200,
            'voiture' => $voiture
        ]);
    }

    public function index()
    {
        $voiture = Voiture::orderBy('id', 'asc')->with('voiture')->get();
        return response([
            'status' => 200,
            'voiture' => $voiture
        ]);
    }

    public function update(Request $request,  $id)
    {
        //dd($request->all());
        $voiture = Voiture::find($id);
        $voitureRequest = $this->validate($request, [
            'categorie_id' => 'required',
            'name' => 'required',
            'serie' => 'required',
            'roue' => 'required|integer'
        ]);

        $voitureUpdate = $voiture->update([
            'categorie_id' =>         $voitureRequest['categorie_id'],
            'name' =>         $voitureRequest['name'],
            'serie' =>         $voitureRequest['serie'],
            'roue' =>         $voitureRequest['roue'],
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

    public function show($id)
    {
        $voiture = Voiture::find($id);

        return response([
            'status' => 200,
            'voit$voiture' => $voiture
        ]);
    }
}
