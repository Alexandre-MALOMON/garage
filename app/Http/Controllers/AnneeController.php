<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use Illuminate\Http\Request;

class AnneeController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|unique:annees',
            'description'=> 'required'
        ]);

        $annee = Annee::create([
            'name' => $request->name,
            'description'=> $request->description
        ]);

        return response([
            'status' => 200,
            'annee' => $annee
        ]);
    }


    public function index()
    {
        $annees = Annee::all();
        return response([
            'status' => 200,
            'annees' => $annees
        ]);
    }

    public function destroy($id)
    {
        $annee = Annee::find($id);
        if ($annee) {
            $annee->delete();
            return response([
                'status' => 200,
                'annees' => $annee
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $annee = Annee::find($id);
        $this->validate($request, [
            'name' => 'required|min:4',
            'description'=> 'required'
        ]);

        $annee->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response([
            'status' => 200,
            'annee' => $annee,
        ]);
    }

    public function show($id)
    {
        $annee = Annee::find($id);

        return response([
            'status' => 200,
            'annee' => $annee
        ]);
    }
}
