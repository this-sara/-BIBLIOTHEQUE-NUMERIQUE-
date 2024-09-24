<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;
    protected $fillable = [
    'livre_id',
    'name',
    'email',
    'phone',
   ' date_sortie',
    'date_retour',
    'status',
    
    ];
    public function users(){
        return $this->belongsTo(user::class);
    }
    public function livre(){
        return $this->hasOne(Livre::class,'id','livre_id');
    }
    
}
