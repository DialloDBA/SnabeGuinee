<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
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

    /**
     * Get the Category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function resume(){
        return Str::limit(
            nl2br(strip_tags($this->resume)), 
            90
        );
    }
}
