<?php

namespace App\Models;

use App\Models\User;
use App\Models\Bourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Justificatif extends Model
{
    use HasFactory,SoftDeletes,HasUlids;

    protected $fillable = [
        'nom',
        'type',
        'taille',
        'dossier',
        'unique',
        'description',
        "actived",
        "user_id",
        "bourse_id",
        "deleted_by",
    ];

    public static function boot(){
        parent::boot();
        parent::creating(function($p){
            $p->unique="PJ-".(sprintf("%03d",(static::withTrashed()->count()+1)));
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bourse(){
        return $this->belongsTo(Bourse::class);
    }
}
