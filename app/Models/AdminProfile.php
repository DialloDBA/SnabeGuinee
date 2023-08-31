<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminProfile extends Profile
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'unique',
        'nom',
        'prenom',
        'telephone_1',
        'telephone_2',
        'adresse',
        'photo',
        'genre_id',
    ];
}
