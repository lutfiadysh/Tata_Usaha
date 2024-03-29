<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','rayon_id','rombel','nis','tahun_pelajaran',
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
    protected $primaryKey = 'nis';

    public function rayon() {
        return $this->belongsTo('App\Rayon');
    }
    public function tunggak(){
        return $this->belongsTo('App\Tunggakan');
    }
    public function tunggakan(){
        return $this->hasMany('App\Tunggakan');
    }
    public function dataRayon()
    {
        return $this->hasMany('App\Rayon');
    }
}
