<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BourseGenre extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "bourse_genre";

    protected $fillable = [
        'actived',
        'bourse_id',
        'genre_id',
        'user_id',
        'deleted_by',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
