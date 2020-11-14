<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Bcrypt;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset($value ?: '/imgs/cropped-logo_transparent.png');
    }

    public function setPasswordAttribute($password){
	$this->attributes['password'] = Hash::needsRehash($password) 
		? Hash::make($password) : $password;
}


    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            
            ->orderByDesc('id')
            ->paginate(5);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    

    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}