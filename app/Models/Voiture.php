<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_id',
        'serie',
        'name',
        'roue',
    ];

    public function voiture(){
       return $this->belongsTo(Categorie::class,'categorie_id','id');
    }
}
