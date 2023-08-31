<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory,SoftDeletes;
     
    protected $fillable = ['titre_video','image_video','category_id','unique','url_video','statut_video','source_video','type_video'];
    public function active()
    {
        return $this->actived ==1 ? true : false ;
    }
    public function statut()
    {
        return $this->actived ==1 ?__('Desactiver') :  __('Activer') ;
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
