<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tunggakan extends Model
{
    use SoftDeletes;

    protected $table = 'tunggakan';

    protected $fillable = ['user_nis','rayon_id','va_jumlah','va_bulan','tunai_jumlah','tunai_bulan','dsp','sertifikat',
    'pondokan','perpisahan','dana_ganjil','dana_genap','kunjungan_industri','bpjs','toeic','total'];

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function dataUser(){
        return $this->belongsTo('App\user');
    }
    public function rayon()
    {
        return $this->belongsTo('App\Rayon');
    }
}
