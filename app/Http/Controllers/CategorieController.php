<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|unique:categories'
        ]);

        $categorie = Categorie::create([
            'name' => $request->name
        ]);

        return response([
            'status' => 200,
            'categorie' => $categorie
        ]);
    }


    public function index()
    {
        $categories = Categorie::all();
        return response([
            'status' => 200,
            'categories' => $categories
        ]);
    }

    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        if ($categorie) {
            $categorie->delete();
            return response([
                'status' => 200,
                'categories' => $categorie
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $this->validate($request, [
            'name' => 'required|min:4',
        ]);

        $categorie->update([
            'name' => $request->name
        ]);

        return response([
            'status' => 200,
            'categorie' => $categorie,
        ]);
    }

    public function show($id)
    {
        $categorie = Categorie::find($id);

        return response([
            'status' => 200,
            'categorie' => $categorie
        ]);
    }
}
