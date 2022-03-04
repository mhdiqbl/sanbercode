<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';
    protected $fillable = ['nama'];

    public function film()
    {
        return $this->hasMany('App\Film');
    }
}
