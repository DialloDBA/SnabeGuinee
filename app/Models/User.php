<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Profile;
use App\Models\Temoignage;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'nom',
        'prenom',
        'telephone_1',
        'telephone_2',
        'adresse',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



     //Un Utilisateur creer plusieurs Sliders
     public function sliders() {
        return $this->hasMany(Slider::class);
    }
    //Un Utilisateur creer plusieurs Temmoignages
    public function temoignages() {
        return $this->hasMany(Temoignage::class);
    }
    
    //Un Utilisateur creer plusieurs Articles
    public function articles() {
        return $this->hasMany(Post::class);
    }
    //Un Utilisateur creer plusieurs Commentaires
    // public function commentaires(){
    //     return $this->hasMany(Commentaire::class);
    // }
    //Un Utilisateur creer plusieurs Videos
    public function videos(){
        return $this->hasMany(Video::class);
    }
    function profile(){
        return $this->hasOne(Profile::class);
    }
}
