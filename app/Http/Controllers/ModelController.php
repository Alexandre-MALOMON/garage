<?php

namespace App\Http\Controllers;

use App\Models\Modeles;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|unique:modeles',
            'description'=> 'required'
        ]);

        $model = Modeles::create([
            'name' => $request->name,
            'description'=> $request->description
        ]);

        return response([
            'status' => 200,
            'model' => $model
        ]);
    }


    public function index()
    {
        $models = Modeles::all();
        return response([
            'status' => 200,
            'models' => $models
        ]);
    }

    public function destroy($id)
    {
        $model = Modeles::find($id);
        if ($model) {
            $model->delete();
            return response([
                'status' => 200,
                'models' => $model
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $model = Modeles::find($id);
        $this->validate($request, [
            'name' => 'required|min:4',
            'description'=> 'required'
        ]);

        $model->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response([
            'status' => 200,
            'model' => $model,
        ]);
    }

    public function show($id)
    {
        $model = Modeles::find($id);

        return response([
            'status' => 200,
            'model' => $model
        ]);
    }
}
