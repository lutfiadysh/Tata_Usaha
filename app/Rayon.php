<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table = 'rayon';

    protected $fillable = ['nama_rayon','pembimbing'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
    public function dataUser()
    {
        return $this->belongsTo('App\User');
    }
}
