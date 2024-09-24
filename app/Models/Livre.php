<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'image',
        'auteur',
        'description',
        'editeur',
        'date_edition',
        'nbre_exemplaires',
        'categorie_id',
    ];
    public function categorie(){
        return $this->belongsTo(Category::class);
    }
}
