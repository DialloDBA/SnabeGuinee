<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'unique',
        'nom',
        'prenom',
        'telephone_1',
        'telephone_2',
        'adresse',
        'photo',
        'genre_id',
    ];

    public static function dossier(){
        $year = date('Y');
        $month = date('m');
        $count = sprintf("%03d",(static::withTrashed()->count()+1));
        return $year."-".$month."-".$count;
    }
    public function nom_complet() {
        return str()->upper($this->nom) . " ".$this->prenom;
    }


    public function BoursierIsComplete() {
        $champs = [
            'photo'=>'Photo de Profile',
            'nom'=>'Nom de Famille',
            'prenom'=>'Prénom',
            'telephone_1'=>'Numéro de Telephone Primaire',
            'adresse'=>'Adresse Complete',
            'telephone_2'=>'Telephone Secondaire',
            'genre_id'=>'Genre',
        ];
        foreach ($champs as $field =>$desc ) {
            if (empty($this->{$field})) {
                return false;
            }
        }
    }
    public function CandidatIsComplete() {
        $champs = [
            'photo'=>'Photo de Profile',
            'nom'=>'Nom de Famille',
            'prenom'=>'Prénom',
            'telephone_1'=>'Numéro de Telephone Primaire',
            'adresse'=>'Adresse Complete',
            'telephone_2'=>'Telephone Secondaire',
            'genre_id'=>'Genre',
        ];
        foreach ($champs as $field =>$desc ) {
            if (empty($this->{$field})) {
                return false;
            }
        }
        return true;
    }
    public function UserIsComplete() {
        
    }
}
