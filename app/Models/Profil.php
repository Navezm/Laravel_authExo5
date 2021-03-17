<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    } 
}
