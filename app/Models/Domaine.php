<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domaine extends Model
{
    use HasFactory,SoftDeletes;

    // public function bourses(){
    //     return $this->hasMany(Bourse::class);
    // }
}
