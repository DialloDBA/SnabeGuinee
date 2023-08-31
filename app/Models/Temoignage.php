<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Temoignage extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        "unique",
        "prenom_temoin",
        "nom_temoin",
        "profession_temoin",
        "telephone_temoin",
        "message_temoin",
        "photo_temoin",
        "video_temoin",
        "actived",
        "deleted_by",
    ];

    public function getRouteKeyName(){
        return "unique";
    }
    public static function code(){
        $nb = static::withTrashed()->count();
        $code = "T-".sprintf("%03d",($nb+1))."-M";
        if(static::where('unique',$code)->count()>0){
            return static::code();
        }
        return $code;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function statut(){
        return $this->actived==1 ? "Actif" : "Inactif";
    }
}
