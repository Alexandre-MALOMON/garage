<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|unique:marques',
            'description'=> 'required'
        ]);

        $marque = Marque::create([
            'name' => $request->name,
            'description'=> $request->description
        ]);

        return response([
            'status' => 200,
            'marque' => $marque
        ]);
    }


    public function index()
    {
        $marques = Marque::all();
        return response([
            'status' => 200,
            'marques' => $marques
        ]);
    }

    public function destroy($id)
    {
        $marque = Marque::find($id);
        if ($marque) {
            $marque->delete();
            return response([
                'status' => 200,
                'marques' => $marque
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $marque = Marque::find($id);
        $this->validate($request, [
            'name' => 'required|min:4',
            'description'=> 'required'
        ]);

        $marque->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response([
            'status' => 200,
            'marque' => $marque,
        ]);
    }

    public function show($id)
    {
        $marque = Marque::find($id);

        return response([
            'status' => 200,
            'marque' => $marque
        ]);
    }
}
