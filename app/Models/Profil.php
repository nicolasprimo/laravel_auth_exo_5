<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'prenom',
        'age',
        'telephone',
        'user_id'
    ];
    use HasFactory;
    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }
}
