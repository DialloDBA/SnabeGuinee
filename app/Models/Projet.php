<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'titre',
        'slug',
        'unique',
        'contenu',
        'image_min',
        'image_max',
        'resume',
        'priorite',
        'route',
        'actived',
        'category_id',
        'motscles',
        'metas',
        'user_id',
        'deleted_by',
    ];
    public function getRouteKeyName(){
        return "unique";
    }
    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function unique(){
        $u = "PRO-".sprintf("%03d",(static::withTrashed()->count()+1));
        return $u;
    }

}
