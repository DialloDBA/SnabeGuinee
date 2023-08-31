<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactMessage extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nom',
        'actived',
        'email',
        'telephone',
        'sujet',
        'message',
        'read_at',
        'deleted_by',
    ];
    public function getRouteKeyName()
    {
        return "unique";
    }
    public function is_read(){
        return ($this->actived==1) ? true : false ;
    }
    public static function code(){
        $nb = static::withTrashed()->count();
        $code = "msg-".sprintf("%04d",($nb+1));
        if(static::where('unique',$code)->count()>0){
            return static::code();
        }
        return $code;
    }
    public static function boot(){
        parent::boot();
        static::creating(function($message){
            $message->unique = static::code() ;
        });
    }

    public function received_at()
    {
        $today = date("d-m-Y");
        if ((new DateTime($this->created_at))->format('d-m-Y')==$today) {
            return (new DateTime($this->created_at))->format('H:i');
        } else {
            if ((new DateTime($this->created_at))->format('Y')==date('Y')) {
                return (new DateTime($this->created_at))->format('d-M');
            }
            return (new DateTime($this->created_at))->format('d-M-Y');
        }
    }
}
