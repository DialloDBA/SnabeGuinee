<?php

namespace App\Models;

use App\Models\Bourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory,SoftDeletes;


    /**
     * The cibles that belong to the Bourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bourses()
    {
        return $this->belongsToMany(Bourse::class, 'bourse_genre','genre_id','bourse_id');
    }
}
