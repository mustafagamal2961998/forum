<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

//    public $timestamps = false;
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'avatar',
        'lang',
        'dir',
        'rate',
        'email_verify',
        'email_verify_code',
        'state',
        'online',
        'department_id'
    ];


    // START RELATIONSHIPS
     public function topics(){
        return $this->hasMany(Topic::class);
     }
    public function comments(){
        return $this->hasMany(Comment::class,'topic_id');
    }
    // END RELATIONSHIPS


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }





    // public function receivesBroadcastNotificationsOn()
    // {
    //     return 'Notifications';
    // }

}
