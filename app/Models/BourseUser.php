<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BourseUser extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "bourse_user";

    protected $fillable = [
        'actived',
        'bourse_id',
        'user_id',
        'action_by',
        'deleted_by',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
