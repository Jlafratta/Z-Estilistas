<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phoneline',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getSocialAvatar(){

        $socialProfile = $this->socialProfiles->first();

        if($socialProfile){
            return $socialProfile->social_avatar;
        }else {
            return asset('admin/assets/avatars/default-avatar.png');
        }
    }

    public static function updateLastVisit($id, $date)
    {
        $user = User::find($id);
        $user->last_visit = $date;      // ESTO TIENE QUE SER AL FINALIZAR EL TURNO
        $user->update();
    }

    /**
    * Relationship methods
    */
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment');
    }

    public function socialProfiles()
    {
        return $this->hasMany('App\Models\SocialProfile');
    }

    /**
    * Gate methods
    */
    public function hasAnyRoles($roles){

        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        return false;
    }

    public function hasRole($role){

        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    /**
    * Scopes
    */
    

}
