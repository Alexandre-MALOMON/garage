<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_id',
        'photo',
        'marque_id',
        'model_id',
        'annee_id',
        'prix',
        'description',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }

    public function modele()
    {
        return $this->belongsTo(Modeles::class, 'model_id', 'id');
    }

    public function marque()
    {
        return $this->belongsTo(Modeles::class, 'marque_id', 'id');
    }

    public function year()
    {
        return $this->belongsTo(Modeles::class, 'annee_id', 'id');
    }
}
