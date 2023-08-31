<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = ['unique','title_sm','title_lg','btn','link','image','folder','actived','deleted_by'];

    public function is_active()
    {
        return $this->actived ==1 ? true : false ;
    }
    public function statut()
    {
        return $this->actived ==1 ?__('Desactiver') :  __('Activer') ;
    }
}
