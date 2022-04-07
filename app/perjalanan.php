<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $fillable = ['id', 'tgl_perjalanan', 'jam', 'lokasi', 'suhu_tubuh', 'user_id'];

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}

