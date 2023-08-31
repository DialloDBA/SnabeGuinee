<?php

namespace App\Models;

use DateTime;
use App\Models\Pays;
use App\Models\User;
use App\Models\Annee;
use App\Models\Genre;
use App\Models\Domaine;
use App\Models\Programme;
use App\Models\Justificatif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bourse extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'titre_bourse',
        'unique',
        'actived',
        'date_limite_bourse',
        'eligibilite',
        'description_bourse',
        'image_min_bourse',
        'image_max_bourse',
        'type_bourse_id',
        'annee_id',
        'pays_id',
        'user_id',
        'deleted_by',
    ];
    protected $casts = [
        'date_limite_bourse'=>"datetime",
    ];
    public function getRouteKeyName()
    {
        return "unique";
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pays(){
        return $this->belongsTo(Pays::class);
    }
    public function annee(){
        return $this->belongsTo(Annee::class);
    }
    // public function domaine(){
    //     return $this->belongsTo(Domaine::class);
    // }

    /**
     * The cibles that belong to the Bourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cibles()
    {
        return $this->belongsToMany(Genre::class, 'bourse_genre', 'bourse_id', 'genre_id');
    }

    public function programmes()
    {
        return $this->belongsToMany(Programme::class, 'bourse_programme', 'bourse_id', 'programme_id');
    }

    

    public function justificatifs(){
        return $this->hasMany(Justificatif::class);
    }

    public static function boot(){
        parent::boot();
        parent::creating(function($bourse){
            $type = TypeBourse::find(request('type'));
            $bourse->unique="{$type->unique}-".(sprintf("%03d",(static::withTrashed()->count()+1)));
        });
    }

    public function limite(){
        if((new DateTime($this->date_limite_bourse))->format('Y') >= date('Y')){
            return \Carbon\Carbon::parse($this->date_limite_bourse)->translatedFormat('d F Y à H\hi');
        }else{
            return \Carbon\Carbon::parse($this->date_limite_bourse)->diffForHumans();
        }

    }
}
