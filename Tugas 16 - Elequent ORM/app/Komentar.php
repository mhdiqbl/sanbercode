<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $fillable = ['user_id','film_id','content','point'];

    public function film()
    {
        return $this->belongsTo('App\Film','film_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
